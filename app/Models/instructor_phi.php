<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class instructor_phi extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    public $timestamps = false;
    protected $guard = 'instructor_phi';
    protected $fillable = ['email', 'password'];
}


