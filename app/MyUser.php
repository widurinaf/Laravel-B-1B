<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    //
    protected $table = 'my_users';
    protected $primarykey = 'id';
    public $timestamps = false;
}
