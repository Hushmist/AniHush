<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    
    public function login_form() 
    {
        return view('auth.login');
    }

    public function login(Request $request) 
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required']
        ]);
        if(auth('web')->attempt($data)) 
        {
            return redirect(route('home'));
        }

        return redirect()->back()->with(['error'=> 'Пользователь не найден, или данные не совпадають']);
    }
    
    public function register_form() 
    {
        return view('auth.register');
    }

    
    public function register(Request $request) 
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'unique:users,name'],
            'email' => ['required', 'string', 'unique:users,email'],
            'password' => ['required', 'confirmed']
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);
        $user->assignRole('admin'); //common user
        if($user) 
        {
            auth('web')->login($user);
        }
        return redirect(route('home'));
    }

    public function logout() 
    {
        auth('web')->logout();
        return redirect(route('home'));
    }
}
