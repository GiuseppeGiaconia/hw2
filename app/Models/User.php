<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $primaryKey = "username";
    protected $autoIncrement = false;
    protected $keyType= "string";

    public function Like()
    {
        return $this->hasMany('App\Models\Like');
    }
}

