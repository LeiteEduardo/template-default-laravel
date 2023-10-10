<?php

use App\Mail\ForgotPasswordEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Vou remover daqui foi teste de envio de email xD
Route::get('send-email', function(){
    $mailData = [
        "name" => "Test NAME",
        "dob" => "12/12/1990"
    ];

    Mail::to("duleiteee@gmail.com")->send(new ForgotPasswordEmail($mailData));

    dd("Mail Sent Successfully!");
});

// Auth Routes
Route::get('/login', [App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'create'])->name('register');
Route::get('/forgot', [App\Http\Controllers\AuthController::class, 'forgot'])->name('forgot');
Route::post('/forgot', [App\Http\Controllers\AuthController::class, 'forgotPassword'])->name('forgot.password');
Route::get('/reset-password/{token}', [App\Http\Controllers\AuthController::class, 'reset'])->name('password.reset');
Route::post('/reset-password', [App\Http\Controllers\AuthController::class, 'resetPassword'])->name('reset.password');

Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/store', [App\Http\Controllers\AuthController::class, 'store'])->name('store');

// Authenticable Routes
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () { return view('pages.dashboard.index'); })->name('dashboard');

});