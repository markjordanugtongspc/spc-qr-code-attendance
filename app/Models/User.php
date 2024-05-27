<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
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
        'year_level',
        'status',
        'profile_picture',
        'guardian_name',
        'guardian_relationship',
        'guardian_phone_number',
        'guardian_email',
        'department',
        'stats',
        'status',
        'job_status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function logs()
    {
        return $this->hasMany(Logs::class, 'student_id', 'student_id');
    }
}
