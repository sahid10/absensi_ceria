<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/', function () {
    return view('dashboard');
    // return view('material-dashboard-master.pages/sign-in');
});

Route::get('page2', function () {
    return view('page2');
});

Route::get('/counter', Counter::class);