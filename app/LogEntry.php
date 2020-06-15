<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogEntry extends Model
{
    protected $fillable = [
        'device_id',
        'data'
    ];

    protected $casts = [
        'data' => 'array'
    ];
}
