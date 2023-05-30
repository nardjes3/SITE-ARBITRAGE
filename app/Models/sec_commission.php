<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class sec_commission extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    public $timestamps = false;
    protected $guard = 'sec_commission';
    protected $fillable = ['email', 'password'];
}

