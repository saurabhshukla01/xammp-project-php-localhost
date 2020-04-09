<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    //
    //protected $fillable = ['sname'];
    protected $fillable = ['sname','standerd'];
    public $timestamps = false;
    protected $table = 'students';
}
