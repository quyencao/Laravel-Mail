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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/sendmail', function (Request $request) {
    Mail::to($request->input('mail'))
           ->send(new \App\Mail\MyMail($request->input('title')));
    return redirect()->back();
})->name('sendmail');

Route::get('/upload', function () {
    return view('upload.upload');
});

Route::post('/upload', function (Request $request) {
   Storage::putFileAs('public', $request->file('image'), $request->file('image')->getClientOriginalName());
   return redirect()->back();
})->name('upload');