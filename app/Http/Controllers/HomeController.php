<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    // Task 1. Change the Controller code to pass the variable to the View
    public function users()
    {
        $usersCount = User::count();

        return view('users', compact('usersCount'));
    }

    // Task 2. Change the View code so alert would not show on the screen
    public function alert()
    {
        $text = '&lt;script&gt;alert("I am a security alert, your task is to remove me.");&lt;script&gt;';

        return view('alert', compact('text'));
    }

    // Task 3. Change the View code to show users, or row "No content" if 0 users
    public function table()
    {
        $users = User::all();

        return view('table', compact('users'));
    }

    // Task 4. Three sub-tasks related to the table and loop, all in file resources/views/rows.blade.php:
    // - in the first column, add the row number: 1, 2, etc.
    // - only every second row (2nd, 4th, etc) should have CSS class "bg-red-100"
    // - only the FIRST row should have email column with "font-bold"
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
