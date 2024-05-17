<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'total_amount',
        'advanced_amount',
        'note', 
        // Add more fillable fields as needed
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
