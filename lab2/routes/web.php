<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\postsController;
use App\Http\Controllers\userController;

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



// Route::get('/', function ($index) {
//     $users = ['ahmed' , ' ali', 'amr' ,'omer'];
//     if (isset ($users[$index]) and ! empty($users[$index])) {
//     return $users[$index];

// }
// return abort(404);
// });

// Route::get('/home', function () {
//     return view('home/home-page');
// });

// Route::view('/', 'home/home-page');






Route::get('/users', [userController::class, 'All_Users'] )->name("users.index");
Route::get('/users/view/{id}', [userController::class, 'user'] )->name("user.view");


Route::get('/users/add', [userController::class, 'addUser'])->name("user.add");
Route::post('/user', [UserController::class, 'saveUser'])->name("user.save");


Route::get('/users/edit/{id}', [userController::class, 'edit'] )->name("user.edit");
Route::put('/user/{id}', [userController::class, 'updetUser'] )->name("users.update");


Route::get('/users/delete/{id}', [UserController::class, 'deleteUser']);

/////////////////////////////////{{post}} ////////////////////////////

Route::get('posts', [postsController::class, 'index'])->name("posts.index");
Route::get('posts/view/{id}', [PostsController::class, 'showPost'])->name("posts.view");


Route::get('posts/create', [PostsController::class, 'create'])->name("posts.create");
Route::post('post', [PostsController::class, 'savePost'])->name("posts.save");


Route::get('post/edit/{id}', [PostsController::class, 'edit'])->name("posts.edit");
Route::put('post/{id}', [PostsController::class, 'updetpost'])->name("posts.update");


Route::get('/posts/delete/{id}', [PostsController::class, 'deletePost']);