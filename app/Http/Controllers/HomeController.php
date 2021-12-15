<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\User;

class HomeController extends Controller
{
		public function store(Request $request)
    {
       
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        
        ]);

        $user = new User;
        $user ->name=$name->name;
        $user ->email=$email->email;
        $user ->password=$password->password;
        $user  ->save();

        return redirect('users');
    }

    // Task 1. Change the Controller code to pass the variable to the View
    public function users(request $request)
    {
        $usersCount = User::count();

        return view('users',['usersCount'=>$usersCount]);
	
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
        $users = User::all();
		

        return view('table', compact('users'));
    }

    // Task 3. Change the View code to show users, or row "No content" if 0 users
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
