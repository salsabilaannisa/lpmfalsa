<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register', 
            'active' => 'register'
        ]);
    }

    public function list()
    {
        return view('register.list', [
            'title' => 'Register', 
            'active' => 'register',
            'data' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nrk' => ['required', 'unique:users'],
            'name' => 'required|max:255', 
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users', 
            'password' => 'required|min:6|max:255'
        ]);


        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/register/list')->with('success', 'Create User successfull');
    }

    public function confirm(User $user, $val)
    {
        
        $validatedData = [
            'status' => $val,
        ];

        $msg = 'User has been '.$val.'!';

        User::where('username', $user->username)
            ->update($validatedData);

        return redirect('/register/list')->with('success', $msg);
    }
}
