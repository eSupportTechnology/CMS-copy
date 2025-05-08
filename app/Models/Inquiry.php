<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'inquiry_source',
        'description',
        'assigned_to_user_id',
        'status',
    ];

    // Inquiry belongs to a customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Inquiry is assigned to a CRM user (salesperson/admin)
    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to_user_id');
    }

    public function followups()
    {
        return $this->hasMany(Followup::class);
    }
    

}
