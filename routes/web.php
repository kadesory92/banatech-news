<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Front\CommentsController as FrontCommentsController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\PostController;
use App\Http\Controllers\ProfileController;
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

/* Route::get('/', function () {
    return view('home');
}); */

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/comment-post', [FrontCommentsController::class, 'commentPost'])->name('comment.post');

Route::get('/dashboard', [FrontController::class, 'redirectUser'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/posts/{post}', [FrontController::class, 'show'])->name('post-show');

});

Route::prefix('admin')->group(function (){
    Route::resource('/category', CategoriesController::class);
    Route::resource('/tag', TagsController::class);
    Route::resource('/post', PostsController::class);
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UsersController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
})->middleware(['auth', 'admin']);

require __DIR__.'/auth.php';
