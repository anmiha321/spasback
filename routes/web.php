<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\UserController;
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

Route::group(['middleware' => 'auth'], function () {
});


Route::get('/', [UserController::class, 'index'])->name('home');

Route::group(['namespace' => 'header_routs'], function()
{
    Route::get("/AboutUs", function(){return view('aboutUs.index');})->name('aboutUs');
    Route::get("/Join", function(){return view('join.index');})->name('join');
    Route::get("/ActiveSearch", function(){return view('activeSearch.index');})->name('activeSearch');
    Route::get("/Help", function(){return view('help.index');})->name('help');
    Route::get("/RequestHelp", function(){return view('requestHelp.index');})->name('requestHelp');
    Route::get("/Comments", function(){return view('comments.index');})->name('comments');
    Route::get("/Blog", function(){return view('blog.index');})->name('blog');
    Route::get("/Contacts", function(){return view('contacts.index');})->name('contacts');
    Route::get("/Gallery", function(){return view('gallery.index');})->name('gallery');
    Route::get("/Faq", function(){return view('faq.index');})->name('faq');
});
Auth::routes();
