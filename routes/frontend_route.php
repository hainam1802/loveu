<?php

use App\Http\Controllers\Frontend\BlogController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Guest;
use App\Library\Helpers;


Route::get('/', function () {
    return view('hello');
});

Route::get('/info', function () {
    return view('index');
});
Route::get('/love-you', function () {
    return view('love');
});
Route::get('/photo-album', function () {
    return view('slider');
});
