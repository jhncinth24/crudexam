<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }

    public function login(){
        if(View::exists('user.login')){
            return view('user.login');
        }else{
            return abort(404);
        }

    }

    public function register(){
        return view('user.register');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|comfirmed|min:6'
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);
        
        auth()->login($user);
    }
    
    public function show($id){
        $data = ["data" => "data from database"];
        return view('user')
            ->with('data' , $data)
            ->with('name' , 'Teng')
            ->with('age' , 22)
            ->with('email' , 'teng@gmail.com')
            ->with('id' , $id);
    }
}
