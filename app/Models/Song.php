<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Song extends Model
{
   
    public function Like()
    {
        return $this->belongsTo('App\Models\Like');
    }
    protected $primaryKey = "username";
    protected $autoIncrement = false;
    protected $keyType= "string";

}
