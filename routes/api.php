<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/send-mail', function () {
    $user = ['name' => 'Anjani', 'email' => 'astroogrid2025@gmail.com'];
    // $user = ['name' => $request->user->name, 'email' => $request->user->Email];

    // return $user;
    Mail::to($user['email'])->send(new WelcomeMail($user));

    return "Email sent!";
});

Route::post('/register', [UserController::class, 'store']);