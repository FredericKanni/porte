<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


// Get the currently authenticated user...
$user = Auth::user();

// Get the currently authenticated user's name...
//$id = Auth::id();
$name = $user->name ;
//dd($name );

        return view('home',["name"=>$name]);
    }
}
