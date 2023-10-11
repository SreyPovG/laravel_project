<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/example', function(){
// return"This is an example";
// });

// Route::get('/user/{id}', function($id){
//     return"this has id{$id}";
// });

// //Route::get('posts/index', [PostController::class, 'index']);
// //Route::get('posts/example1', [PostController::class, 'example1']);
// //Route::get('posts/example2/{id}', [PostController::class, 'example2']);
// Route::prefix("posts")->group(function(){
//     Route::get('/index', [PostController::class, 'index']);
//     Route::get('/example1', [PostController::class, 'example1']);
//     Route::get('/example2/{id}', [PostController::class, 'example2']);
// });
