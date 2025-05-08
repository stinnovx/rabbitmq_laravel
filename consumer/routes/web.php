<?php

use App\Mail\WelcomeMail;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-mail', function(){
    $user = [
        'name' => 'Salauddin',
        'email' => 'salauddin.innovx@gmail.com'
    ];

    Mail::to($user['email'])->send(new WelcomeMail($user));
});
