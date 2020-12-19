<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TheLions;

class MainPageController extends Controller
{
    public function index() {
        $user = request('user');
        $userID = request('userID');
    
        $the_lions = TheLions::orderBy("name", "desc")->get();

        return view('home', [
            "member" => $the_lions,
            "user" => $user,
            "userID" => $userID
        ]);
    }

    public function show($id){
        
        $the_lions = TheLions::findorFail($id);
        
        return view('thelions.profiles', [
            "query" => $the_lions
        ]);
    }

    public function create(){     
        return view('thelions.create');
    }
}
