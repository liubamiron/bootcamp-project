<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
     return view('welcome');
});

// Route::get('/', function() {
//     return 'hello world!';
// });

// Route::get('/', function() {return ['foo' => 'bar'];} );

Route::get('/contact', function () {
    return view('contact');
})->name('show_contact');
// Route::redirect('/show_contact', '/contact);

 Route::post('/contact/send_contact', function () {
    dd(Request::all());
 })->name('send_contact'); 