<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


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
    public function index(){

        $user = Auth::user()->cod_client;
        $orgList = DB::select('call USP_GET_USER_INFO(?)',[$user]);
    
        Session()->put( 'user_info', $orgList );

        //dd($orgList);

        return view('home', compact('orgList'));
    }
}
