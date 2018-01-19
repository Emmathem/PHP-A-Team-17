<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = Users::find($user_id);
        return view('dashboard')->with('posts', $user->posts);
    }
}
