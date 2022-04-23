<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

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

Route::get('/',[PostController::class,'index'])->name('posts');


Route::get('/details', function () {
    return view('post.postdetails');
});


Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
// ------------- PROFILE ----------------
Route::get('/profile',[ProfileController::class,'index'])->name('profile');
Route::post('/saveprofile',[ProfileController::class,'create'])->name('saveprofile');

// ----------------------- POST ----------------

Route::get('/addpost',[PostController::class,'addpost'])->name("addpost");
Route::post('/createpost',[PostController::class,'create'])->name("ceratepost");
