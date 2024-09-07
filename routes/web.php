<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Controllers\WhatsAppNotificationController;

// post
Route::post('/send-notification', [WhatsAppNotificationController::class, 'sendNotification'])->name('send.whatsapp.notification');





// get
Route::get('/', function () {
    return view('dashboard');});

Route::get('wanotifikasi', function () {
    return view('wanotifikasi');});

Route::get('billing', function () {
    return view('billing');});

Route::get('profile', function () {
    return view('profile');});

Route::get('signin', function () {
    return view('sign-in');});

Route::get('signup', function () {
    return view('sign-up');});

Route::get('notifikasi', function () {
    return view('notifikasi');});

Route::get('/counter', Counter::class);

