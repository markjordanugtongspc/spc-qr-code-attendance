<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs2 extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'logs2'; // Replace 'logs2' with your actual table name if different

    // Specify the fillable attributes (the columns you can mass-assign)
    protected $fillable = [
        'id',
        'user_id',
        'subject',
        'date',
        'time_in',
        'time_out',
    ];

    // Define relationships if needed (optional)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ... other model methods if required ...
}
