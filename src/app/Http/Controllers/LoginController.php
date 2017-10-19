<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use Redirect;

class LoginController extends Controller
{
  public function login()
  {
    return view('login');
  }

  public function auth(Request $request)
  {
    if (Auth::attempt(['email' => $request->user_email, 'password' => $request->user_password])) {

      if (Auth::user()->blocked == 1) {
        Redirect::to('/panel');
      } else {
        Session::flash('danger_message', 'Sua conta se encontra bloqueada.');
        Redirect::to('/login');
      }
    }

    Session::flash('danger_message', 'E-mail ou senha incorreto(s).');
    Redirect::to('/login');
  }

  public function logout()
  {
  	Auth::logout();
  	return Redirect::to('/');
  }
}
