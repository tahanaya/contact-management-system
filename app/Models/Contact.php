<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', // Add this line
        'email',
        'phone',
        // Add any other attributes that you want to allow mass assignment for
    ];
}
