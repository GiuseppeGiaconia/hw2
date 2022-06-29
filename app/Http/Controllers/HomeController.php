<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use DB;
use App\Models\User;

class HomeController extends BaseController
{
    public function home()
    {
        if(!Session::get('user_username'))
        {
            return redirect('login');
        }
        $user = User::find(Session::get('user_username'));

        return view('home')->with('username', $user->username);
    }

    public function api()
    {
        $URL = "https://newsapi.org/v2/everything?q=album&language=it&sortBy=publishedAt&apiKey=c47bf024305d44048de5e5413433c257";

        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL, $URL); 
        curl_setopt($curl, CURLOPT_POST,0); 
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36'); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    
        $result = curl_exec($curl); 
        $json = json_decode($result, true);
        curl_close($curl); 
        return json_encode($json);
     
        
            
    }

    
}