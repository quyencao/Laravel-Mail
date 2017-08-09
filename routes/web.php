<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use \Illuminate\Support\Facades\Mail;
use App\Mail\SendEmailMailable;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendEmail', function() {
    dispatch(new \App\Jobs\SendEmailJob());

    return 'Email is sended';
});


