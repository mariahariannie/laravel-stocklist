<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/', function () {
    return view('layouts.gallery');
});

Route::get('/index', function () {
    return view('stocklist.index');
});

Route::get('/create', function () {
    return view('stocklist.create');
});

Route::get('/update', function () {
    return view('stocklist.update');
});

Route::resource('stocklist', ItemController::class);