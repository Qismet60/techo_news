<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SignOutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }
}
