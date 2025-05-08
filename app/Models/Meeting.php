<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'inquiry_id',
        'meeting_date',
        'meeting_location',
        'meeting_status',
        'notes',
    ];

    public function inquiry()
    {
        return $this->belongsTo(Inquiry::class);
    }

    // ✅ Auto-create notification when a meeting is scheduled
    protected static function boot()
    {
        parent::boot();

        static::created(function ($meeting) {
            Notification::create([
                'user_id' => auth()->id() ?? 1, // fallback if no user is logged in
                'type' => 'meeting_reminder',
                'message' => 'Upcoming meeting for Inquiry ID ' . $meeting->inquiry_id,
                'scheduled_time' => $meeting->meeting_date->subMinutes(30), // 30 minutes before
            ]);
        });
    }
}
