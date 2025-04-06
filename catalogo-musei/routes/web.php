<?php

use Illuminate\Support\Facades\Route;
use App\Models\Museo;

Route::get('/', function () {
    $musei = Museo::all();
    return view('welcome', compact('musei'));
});

Route::get('/', function () {
    return view('home');
});
