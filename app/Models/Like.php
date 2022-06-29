<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Like extends Model
{
    protected $primaryKey = "username";
    protected $autoIncrement = false;
    protected $keyType= "string";

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function Articoli()
    {
        return $this->hasMany('App\Models\Song');
    }
}