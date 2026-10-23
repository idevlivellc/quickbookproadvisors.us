<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use RuntimeException;

#[Signature('app:import-leads')]
#[Description('Command description')]
class ImportLeads extends Command
{
    protected $signature = 'leads:import {file}';
    protected $description = 'Import leads from a CSV file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = $this->argument('file');

        if (! is_file($path) || ! is_readable($path)) {
            $this->error("CSV file not found or not readable: {$path}");

            return self::FAILURE;
        }

        $file = fopen($path, 'rb');

        if ($file === false) {
            $this->error('Could not open the CSV file.');

            return self::FAILURE;
        }

        try {
            $headers = fgetcsv($file);

            if (! $headers) {
                throw new RuntimeException('The CSV is empty or has no header row.');
            }

            // Remove a UTF-8 BOM if the spreadsheet app added one.
            $headers[0] = preg_replace('/^\xEF\xBB\xBF/', '', $headers[0]);

            $headers = array_map(
                fn ($header) => strtolower(trim($header)),
                $headers
            );

            foreach (['name', 'phone'] as $requiredHeader) {
                if (! in_array($requiredHeader, $headers, true)) {
                    throw new RuntimeException(
                        "The CSV must include a '{$requiredHeader}' header."
                    );
                }
            }

            $headerPositions = array_flip($headers);
            $batch = [];
            $imported = 0;
            $rowNumber = 1;
            $now = now();

            while (($row = fgetcsv($file)) !== false) {
                $rowNumber++;

                // Ignore completely blank rows.
                if ($row === [null] || $row === false) {
                    continue;
                }

                $name = trim((string) ($row[$headerPositions['name']] ?? ''));
                $phone = trim((string) ($row[$headerPositions['phone']] ?? ''));
                $email = isset($headerPositions['email'])
                    ? trim((string) ($row[$headerPositions['email']] ?? ''))
                    : '';

                if ($name === '' || $phone === '') {
                    throw new RuntimeException(
                        "Row {$rowNumber} is missing a name or phone number."
                    );
                }

                if ($email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                    throw new RuntimeException(
                        "Row {$rowNumber} has an invalid email address."
                    );
                }

                $batch[] = [
                    'name' => $name,
                    'phone' => $phone,
                    'email' => $email !== '' ? $email : null,
                    'ai_call_eligible' => true,
                    'call_status' => 'pending',
                    'call_attempts' => 0,
                    'created_at' => $now,
                    'updated_at' => $now,
                ];

                if (count($batch) >= 500) {
                    DB::table('leads')->insert($batch);
                    $imported += count($batch);
                    $batch = [];
                }
            }

            if ($batch !== []) {
                DB::table('leads')->insert($batch);
                $imported += count($batch);
            }

            $this->info("Imported {$imported} leads.");

            return self::SUCCESS;
        } catch (\Throwable $exception) {
            $this->error($exception->getMessage());

            return self::FAILURE;
        } finally {
            fclose($file);
        }
    }
}
