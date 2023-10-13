<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return 'Hola soy acerca de...';
});

Route::view('profile', 'profile');

Route::post('profile', function (Illuminate\Http\Request $request) {
    $request->file('photo')->store('profile');

    return redirect('profile');
});