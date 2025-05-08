<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Followup extends Model
{
    use HasFactory;

    protected $fillable = [
        'inquiry_id',
        'scheduled_date',
        'call_status',
        'notes',
        'created_by_user_id',
    ];

    /**
     * The inquiry this follow-up belongs to.
     */
    public function inquiry()
    {
        return $this->belongsTo(Inquiry::class);
    }

    /**
     * The user (agent) who created this follow-up.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }
}
