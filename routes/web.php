<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Controllers\WhatsAppNotificationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\KaryawanController;


// -------------------------------------------------------------post-------------------------------------------------------------
// Route::post('/send-notification', [WhatsAppNotificationController::class, 'sendNotification'])->name('send.whatsapp.notification');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');





//-------------------------------------------------------------- get---------------------------------------------------------
//dashboard
Route::get('/', function () {
    return view('dashboard');});

//Project
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.project_index');

//Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.karyawan_index');
    
Route::get('/inventory', function () {
    return view('inventory.inventory_index');});

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

