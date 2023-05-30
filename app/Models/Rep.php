<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rep extends Model
{
    use HasFactory;
    protected $fillable = [
        'pdf', // Add any other fillable fields here
    ];
}
