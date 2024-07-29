<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_form()
    {
        return "<h1>This is Login form page.</h1>";
    }

    public function login_process()
    {
        return '<h1>Your login process has been processed.</h1>';
    }

    public function forgot_password()
    {
        return '<h1>Forgot</h1>';
    }
}
