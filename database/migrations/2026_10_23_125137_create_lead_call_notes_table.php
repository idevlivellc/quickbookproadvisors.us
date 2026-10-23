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
        Schema::create('lead_call_notes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('lead_id')->constrained('leads')->cascadeOnDelete();

            $table->uuid('call_id')->unique();

            $table->string('elevenlabs_conversation_id')->nullable()->unique();

            $table->string('status', 32)->default('in_progress');
            
            $table->string('outcome', 32)->nullable();

            $table->text('notes')->nullable();
            $table->timestamp('started_at')->useCurrent();
            $table->timestamp('ended_at')->nullable();
            $table->timestamp('callback_at')->nullable();
            $table->unsignedInteger('duration_seconds')->nullable();

            $table->timestamps();
            
            $table->index(['lead_id', 'started_at']);
            $table->index(['status', 'outcome']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_call_notes');
    }
};
