<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = ['sname','standerd'];
    public $timestamps = false;
}
