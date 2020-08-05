<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::whereNotNull('last_login')->take(5)->latest()->get();
        return view('home', compact('users'));
    }
}
