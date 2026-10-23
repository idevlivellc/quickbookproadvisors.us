<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lead extends Model
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_CALLBACK_SCHEDULED = 'callback_scheduled';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_DO_NOT_CALL = 'do_not_call';
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'ai_call_eligible',
        'do_not_call_at',
        'call_status',
        'call_attempts',
        'next_call_at',
        'call_claimed_at',
    ];

    protected function casts(): array
    {
        return [
            'ai_call_eligible' => 'boolean',
            'do_not_call_at' => 'datetime',
            'call_attempts' => 'integer',
            'next_call_at' => 'datetime',
            'call_claimed_at' => 'datetime',
        ];
    }

    public function callNotes(): HasMany
    {
        return $this->hasMany(LeadCallNote::class);
    }
}
