<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    { 
        // $data = $request->all();
        // $data = $request->only(['name', 'email']);
        // $data = $request->except(['name', 'email']);

        // $name = $request->input('name');
        // $email = $request->input('email');
        // // $agreement = !! $request->input('agreement'); //Boolean
        // $agreement = $request->boolean('agreement'); //Boolean
        // $avatar = $request->file('avatar');
        
        // dd($name, $email, $agreement, $avatar);

        // dd($request->has('name'));

        // dd($request->filled('name'));

        // dd($request->missing('name'));

        if($name = $request->input('name')) {
            $name = strtoupper($name);
        }

        return view('register.store');
    }
}
