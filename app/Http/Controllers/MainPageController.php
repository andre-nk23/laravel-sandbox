<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index() {
        $user = request('user');
        $userID = request('userID');
    
        $leader = [
            "leader" => "Song Ahyeong",
            "member" => [
                "1" => "Sung Taehoon",
                "2" => "Kim Hyunsoo",
                "3" => "Hwang Mangi",
                "4" => "Song Ahyeong",
                "5" => "Shin Geunwoo",
                "6" => "Lucy"
            ]
        ];
        return view('home', [
            "leader" => $leader["leader"],
            "member" => $leader["member"],
            "user" => $user,
            "userID" => $userID
        ]);
    }

    public function show($query){
        $user = '';
        $userID = '';
        
        return view('profiles', [
            "query" => $query,
            "user" => $user,
            "userID" => $userID
        ]);
    }
}
