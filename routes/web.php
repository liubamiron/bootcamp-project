<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\AppartmentController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');







 Route::get('/registration', function () {return view('registration'); })->name('registration');

 Route::get('/houses', [HouseController::class, 'index'])->name('house');

 Route::get('/appartments', [AppartmentController::class, 'index'])
 ->name('appartment');

 Route::get('/blog', [BlogController::class, 'index'])->name('blog');

 Route::get('/blog/article/{id}', [ArticleController::class, 'show'])
 ->name('blogArticle');


Route::get('/appartments/item/', [ItemController::class, 'index'])->name('appartmentsItem');

Route::get('/houses/item/', [ItemController::class, 'index'])->name('housesItem');

Route::get('/contact', [ContactUsController::class, 'view'])->name('contactUs');




Route::post('/contactUs', [ContactUsController::class, 'send'])->name('contactUs.send')
->middleware('log.activity:sendContactUs');



