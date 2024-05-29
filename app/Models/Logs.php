<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'student_id');
    }

    // Define the instructor relationship
    public function instructor()
    {
        // Assuming 'instructor_name' is the column in the 'logs' table
        // and 'name' is the column in the 'users' table
        return $this->belongsTo(User::class, 'instructor_name', 'name');
    }
}
