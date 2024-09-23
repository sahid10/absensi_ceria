<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Controllers\WhatsAppNotificationController;
use App\Http\Controllers\ProjectController;



// post
Route::post('/send-notification', [WhatsAppNotificationController::class, 'sendNotification'])->name('send.whatsapp.notification');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');





// get
Route::get('/', function () {
    return view('dashboard');});

// Route::get('wanotifikasi', function () {
//     return view('wanotifikasi');});

Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.project_index');
    
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

Route::get('/projects/send-wa/{id}', [ProjectController::class, 'sendWa'])->name('projects.send_wa');

