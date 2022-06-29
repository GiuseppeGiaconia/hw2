<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use DB;
use App\Models\User;
use App\Models\Song;
use App\Models\Like;

class DescriController extends BaseController
{
    public function visualizza()
    {
        return view('descrizione');
    }
}