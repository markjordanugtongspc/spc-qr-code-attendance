<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Logs2 extends Model
{
    use SoftDeletes;

    protected $table = 'logs2';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
