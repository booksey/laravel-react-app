<?php


namespace App\Http\Controllers;


class LoginController extends Controller
{
    public function welcome()
    {
        return view('admin.welcome');
    }

    public function login()
    {
        return view('admin.login');
    }
}
