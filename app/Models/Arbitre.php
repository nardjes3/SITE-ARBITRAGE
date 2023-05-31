<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Arbitre  extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    public $timestamps = false;
    protected $guard = 'arbitre';
    protected $fillable = ['email', 'password', 'notification_envoyee', 'paye_envoyee', 'test_envoyee',];
}
