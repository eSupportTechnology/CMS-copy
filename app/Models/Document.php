<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'inquiry_id',
        'document_type',
        'file_url',
        'version_number',
    ];

    public function inquiry()
    {
        return $this->belongsTo(Inquiry::class);
    }
}
