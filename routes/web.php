<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
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
    return view('welcome', [
        "leader" => $leader["leader"],
        "member" => $leader["member"],
        "user" => $user,
        "userID" => $userID
    ]);
});

