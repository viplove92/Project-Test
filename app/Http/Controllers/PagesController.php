<?php namespace App\Http\Controllers;


use Auth;

class PagesController extends Controller {

    public function getHome()
    {
        if (Auth::check())
        {
            return redirect()->route('user.home');
        }
            return view('auth.login');

    }


}