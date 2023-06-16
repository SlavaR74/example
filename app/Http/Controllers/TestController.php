<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('token');
    // }


    public function __invoke(Request $request)
    {

        //actions

        //response

        // return 'Test';

        // $response = app()->make('response');
        // $response = app('response');
        // $response = response();

        // return response('Test', 200, []);
        return ['foo' => 'bar'];
        return response()->json([], 200, []);


    }
}
