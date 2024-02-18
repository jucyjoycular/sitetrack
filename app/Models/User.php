<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_OPERATOR = 'OPERATOR';
    const ROLE_SUPERVISOR = 'SUPERVISOR';
    const ROLE_MECHANIC = 'MECHANIC';
    const MANAGER = 'MANAGER';

    protected $fillable = [
        'name',
        'username',
        'email',
        'phone_number',
        'password',
        'joined_date',
        'gl_code',
        'ic_passport',
        'passport_expiry',
        'permit_number',
        'permit_expiry',
        'role',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'username_verified_at' => 'datetime',
    ];
}
