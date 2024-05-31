<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceLog extends Model
{
    use HasFactory;

    protected $table = 'logs2'; // Specify the table name if it's not the plural of the model name

    protected $fillable = ['user_id', 'subject', 'date', 'time_in', 'time_out'];

    // Define any necessary relationships, accessors, or mutators here
}
