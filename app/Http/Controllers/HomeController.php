<?php

namespace App\Http\Controllers;

use App\Models\User;

use function compact;

class HomeController extends Controller
{
    // Task 1. Change the Controller code to pass the variable to the View
    public function users()
    {
        $usersCount = User::query()
            ->count();

        return view('users', compact('usersCount'));
    }

    // Task 2. Change the View code so alert would not show on the screen
    public function alert()
    {
        $text = '<script>alert("I am a security alert, your task is to remove me.");</script>';

        return view('alert', compact('text'));
    }

    // Task 3. Change the View code to show users, or row "No content" if 0 users
    public function table()
    {
        $users = User::query()
            ->get();

        return view('table', compact('users'));
    }

    // Task 3. Change the View code to show users, or row "No content" if 0 users
    public function rows()
    {
        $users = User::query()
            ->get();

        return view('rows', compact('users'));
    }

    public function include()
    {
        $users = User::query()
            ->get();

        return view('include', compact('users'));
    }
}
