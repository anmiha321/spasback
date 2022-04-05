<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\HomeController;
use \App\Http\Controllers\Backend\UserController;
use \App\Http\Controllers\Backend\PeopleInSearchController;
use \App\Http\Controllers\Backend\NeedController;
use \App\Http\Controllers\Backend\RequestHelpController;
use \App\Http\Controllers\Backend\CommentController;
use \App\Http\Controllers\Backend\BlogController;
use \App\Http\Controllers\Backend\ContactController;
use \App\Http\Controllers\Backend\GalleryController;
use \App\Http\Controllers\Backend\FAQController;
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
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
});


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'header_routs'], function()
{
    Route::get("/AboutUs", function(){return view('aboutUs.index');})->name('aboutUs');
    Route::get("/Join", [UserController::class, 'index'])->name('join');
    Route::get("/ActiveSearch", [PeopleInSearchController::class, 'index'])->name('activeSearch');
    Route::get("/Help", [NeedController::class, 'index'])->name('help');
    Route::get("/RequestHelp", [RequestHelpController::class, 'index'])->name('requestHelp');
    Route::get("/Comments",[CommentController::class, 'index'])->name('comments');
    Route::get("/Blog", [BlogController::class, 'index'])->name('blog');
    Route::get("/Blog/Articles/{slug}", [BlogController::class, 'edit'])->name('article');
    Route::get("/Contacts", [ContactController::class, 'index'])->name('contacts');
    Route::get("/Gallery", [GalleryController::class, 'index'])->name('gallery');
    Route::get("/Faq", [FAQController::class, 'index'])->name('faq');
});

Route::group(['namespace' => 'store_routes'], function()
{
    Route::post('/create_volunteer', [UserController::class, 'store'])->name('create_volunteer');
    Route::post('/create_request', [RequestHelpController::class, 'store'])->name('create_request');
    Route::post('/send_question', [FAQController::class, 'send'])->name('send_question');
});
