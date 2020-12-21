<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TheLions;

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
        $user = request('user');
        $userID = request('userID');
    
        $the_lions = TheLions::orderBy("name", "desc")->get();

        return view('home',
        [
            "member" => $the_lions,
            "user" => $user,
            "userID" => $userID
        ]);
    }
}
