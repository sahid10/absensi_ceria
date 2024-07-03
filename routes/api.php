<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendantController;
use App\Http\Controllers\AuthentificationController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::post('/tokens/create', function (Request $request) {
//     $token = $request->user()->createToken($request->token_name);
 
//     return ['token' => $token->plainTextToken];
// });

Route::post('/login', [AuthentificationController::class, 'login']);

// Route::get('/logout', [AuthentificationController::class, 'logout'])->middleware(['auth:sanctum']);
// Route::get('/userlogin', [AuthentificationController::class, 'userlogin'])->middleware(['auth:sanctum']);

//grouping route
Route::middleware(['auth:sanctum'])->group(function (){
    Route::get('/logout', [AuthentificationController::class, 'logout']);
    Route::get('/userlogin', [AuthentificationController::class, 'userlogin']);
    Route::get('/attendant', [AttendantController::class, 'index']);
    Route::get('/attendant/{id}', [AttendantController::class, 'show']);

    Route::post('/posts', [AttendantController::class, 'store']);
        
  

});




