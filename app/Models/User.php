<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     *
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'student_id',
        'course',
        'email',
        'password',
        'userType',
        'phone_number',
        'birthday',
        'address',
        'gender',
        'profile_picture',
        'guardian_name',
        'guardian_relationship',
        'guardian_phone_number',
        'guardian_email',
    ];

    /**
     *
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     *
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
