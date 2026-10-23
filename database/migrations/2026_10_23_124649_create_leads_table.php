<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            $table->string('name', 150);
            $table->string('email')->nullable()->index();
            $table->string('phone', 32)->index(); // Store in E.164 format where possible.

            // Leads must be explicitly approved before the agent can call them.
            $table->boolean('ai_call_eligible')->default(false);

            // A do-not-call request excludes the lead from future calls.
            $table->timestamp('do_not_call_at')->nullable();

            // Current queue state; call outcomes/history live in lead_call_notes.
            $table->string('call_status', 32)->default('pending');
            $table->unsignedInteger('call_attempts')->default(0);
            $table->timestamp('next_call_at')->nullable();
            $table->timestamp('call_claimed_at')->nullable();

            $table->timestamps();

            $table->index(['ai_call_eligible', 'call_status', 'next_call_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
