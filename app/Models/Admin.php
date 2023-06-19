<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;
    /**
     * inherit document
     */
    protected $guard = 'admin';

    /**
     * inherit document
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'first_name',
        'last_name',
        'created_at',
    ];

    /**
     * inherit document
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
