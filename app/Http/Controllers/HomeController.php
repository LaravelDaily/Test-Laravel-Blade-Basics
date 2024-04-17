<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function users()
    {
        $usersCount = User::count();

        return view('users', compact('usersCount'));
    }

    public function alert()
    {
        $text = '<script>alert("I am a security alert, your task is to remove me.");</script>';

        return view('alert', compact('text'));
    }

    public function table()
    {
        $users = User::all();

        return view('table', compact('users'));
    }

    public function rows()
    {
        $users = User::all();

        return view('rows', compact('users'));
    }

    public function include()
    {
        $users = User::all();

        return view('include', compact('users'));
    }
}
