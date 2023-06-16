<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(Request $request)
    {

        // if ($test = session('test')) {
        //     action($test);
        // }


        // dd(session()->all());
        // $foo = session('foo');

        // dd($foo);

        // $ip = $request->ip();
        // $path = $request->path();
        // $url = $request->url();
        // $full = $request->fullUrl();

        // dd($ip, $path, $url, $full);

        // dd($request->is('log*'));
        // dd($request->routeIs('log*'));

        return view('login.index');
    }

    public function store(Request $request)
    {

        //authentificate user

        session(['alert' => __('Добро пожаловать')]);
        // alert ( __('Добро пожаловать'));


        // $ip = $request->ip();
        // $path = $request->path();
        // $url = $request->url();

        // dd($ip, $path, $url);

        // $email = $request->input('email');
        // $password = $request->input('password');
        // $remember = $request->boolean('remember');
        
        // dd($email, $password, $remember);

        // return 'Запрос на вход';
        // return response()->redirectTo('/foo');
        // return response()->redirectToRoute('user');

        // $session = app()->make('session');
        // $session = app('session');
        // $session = session();
        // $session = Session::get('key');

        // dd($session);

        // $session->put('foo', 'bar');


        // session()->put('foo', 'bar');
        // session(['foo' => 'Bar']);

        // session()->forget('foo');
        // session()->flush();


        // if (true) {
        //     return redirect()->back()->withInput();
        // }


        return redirect()->route('user.posts.index');
    }
}
