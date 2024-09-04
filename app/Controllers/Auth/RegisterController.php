<?php namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class RegisterController extends BaseController
{
    public function registerView()
    {
        return view('auth/register');
    }
}