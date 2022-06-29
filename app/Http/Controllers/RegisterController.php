<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class RegisterController extends BaseController
{



    public function register_form()
    {
        if(Session::get('user_username'))
        {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('register')->with('error', $error);
    }

    public function do_register() 
    {
        if(Session::get('user_username'))
        {
            return redirect('home');
        }

        if(strlen(request("nome")) == 0 || strlen(request("cognome")) == 0 || strlen(request("username")) == 0 || strlen(request("email")) == 0 || strlen(request("password")) == 0)
        {
            Session::put('error','empty_fields');
            return redirect('register')->withInput();
        }
        else if(User::where('username', request('username'))->first())
        {
            Session::put('error','existing');
            return redirect('register')->withInput();
        }
        else if(User::where('email', request('email'))->first())
        {
            Session::put('error','email');
            return redirect('register')->withInput();
        }
        else if (request('password') != request('confirm_password'))
        {
            Session::put('error','bad_passwords');
            return redirect('register')->withInput(); 
        }
        else if (strlen(request('password')) < 8)
        {
            Session::put('error','short_passwords');
            return redirect('register')->withInput(); 
        }

        $user = new User;
        $user->nome = request('nome');
        $user->cognome = request('cognome');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = request('password');
        $user->save();

        Session::put('user_username',$user->username);

        return redirect('home');
    }
    public function checkEmail($query)
    {
        $exist = User::where('email', $query)->exists();
        return ['exists' => $exist];
    }
}
