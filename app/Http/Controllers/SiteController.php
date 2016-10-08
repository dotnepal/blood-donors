<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
    public function home(){
      //Returning home page
      return \View::make('site.home');
    }

    public function login(){

      return \View::make('site.login');
    }

    public function signup(){

      return \View::make('site.signup');
    }

    public function login_do(Request $request){

      //
    }

    public function signup_do(Request $request){

      //
    }

}
