<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;
use App\Models\User;


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
    return view('home', [
        "active" => 'home',
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Nur Ihsan Dwi L",
        "email" => "Nurihsan719@gmail.com",
        "image" => "1.jpeg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{post:slug}',[PostController::class, 'show']);
 
Route::get('/categories', function () {
    return view('categories', [
        "title" => 'Post Categories',
        "active" => 'categories',
        "categories" => Category::all()
    ]);
});

