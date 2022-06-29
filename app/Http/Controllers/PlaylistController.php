<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use DB;
use App\Models\User;

class PlaylistController extends BaseController
{
    public function playlist()
    {
        if(!Session::get('user_username'))
        {
            return [];
        }
        $user = User::find(Session::get('user_username'));

        return view('playlist')->with('username', $user->username);
        $titolo =DB::table('likes')->select('titolo')->where('username', $user->username)->get();
       
    }

    public function stampa()
    {
        if(!Session::get('user_username'))
        {
            return [];
        }
        $user = User::find(Session::get('user_username'));

        $posts= DB::table('likes')
        ->join('songs','likes.titolo','=','songs.titolo')
        ->where('likes.username','=',$user->username)
        ->select('songs.titolo','songs.img')
        ->get();

        return $posts;
    }

    public function elimina($t)
    {
        if(!Session::get('user_username'))
        {
            return [];
        }
        $user = User::find(Session::get('user_username'));

        DB::table('likes')
        ->where('likes.titolo','=',$t)
        ->delete();
    }
}