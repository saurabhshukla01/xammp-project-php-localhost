<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'dlr',
        'dest',
        'report',
        'time',
        'mob_no',
        'message_id',
        'prud_message_id'
    ];
    //return $this->belongsTo(User::class);
}
