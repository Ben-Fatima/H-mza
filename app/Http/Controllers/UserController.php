<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('user.profile');
    }
    public function create(){
        return view('user.create');
    }
    public function edit(){
        return view('user.edit');
    }
    public function update(){
        $user =auth()->user(); 
        $user->about = request('about');
        $user->profile_picture = request()->file('profile_picture')->store('profile');
        $user->save();
        return redirect('/profile');
    }
    public function store(){
        $attributs = request()->validate([
            'username'=>'required|max:255|min:3',
            'email'=>'required|max:255|email',
            'phone_number'=>'required',
            'address'=>'required',
            'role'=>'required',
            'password'=>'required|min:8'
        ]);
        $attributs['password'] = bcrypt($attributs['password']);
        $user = User::create($attributs);
        auth()->login($user);
        return redirect('/profile');
    }
    public function logout()
    {
        auth()->logout();
        return redirect("/register");
    }
    public function log()
    {
        return view("user.login");
    }
    public function login()
    {
        $user = User::where("username", "=", request("username"))->first();
        if ($user && Hash::check(request("password"), $user->password)) {
            Auth::login($user);
            return redirect("/profile");
        }
        return redirect("/login");
    }
}
