<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use DB;
use App\Models\User;
use App\Models\Song;
use App\Models\Like;

class NuoveController extends BaseController
{

    public function nuove()
    {
        if(!Session::get('user_username'))
        {
            return [];
        }
        $user = User::find(Session::get('user_username'));

        return view('nuove')->with('username', $user->username);
    }

    public function salva($tit,$img)
    {
        $user =User::find(Session::get('user_username'));
        $image=str_replace('----','/',$img);


        if($art= Song::where('titolo','=', $tit)->first())
        {
            $like = new Like();
            $like->username = $user->username;
            $like->titolo = $tit;
            $like->save();
        }
        else{
        $song= new Song();
        $song->titolo = $tit;
        $song->img= $image;
        $song->save();


        
        $like = new Like();
        $like->username = $user->username;
        $like->titolo = $tit;
        $like->save();
        }
        return [];

    }

}
