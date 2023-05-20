<?php

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
use App\Http\Controllers\PostsController;

Route::get('posts', [PostsController::class, 'postsIndex']);
Route::get('posts/view', [PostsController::class, 'view']);
Route::get('posts/edit', [PostsController::class, 'edit']);
Route::get('posts/delete', [PostsController::class, 'delete']);
Route::get('posts/add', [PostsController::class, 'add']);
// Route::get('contactus', [PostsController::class, 'contactus']);
// Route::get('aboutus', [PostsController::class, 'aboutus']);
