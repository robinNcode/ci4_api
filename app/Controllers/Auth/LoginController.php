<?php namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function loginView()
    {
        return view('auth/login');
    }
}
