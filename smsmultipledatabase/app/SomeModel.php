<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SomeModel extends Model
{
    protected $connection = 'mysql2';
    public $table = 'some_models';
}
