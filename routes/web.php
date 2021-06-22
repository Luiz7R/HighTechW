<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UsersController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';




Route::get('/', [LandingController::class, 'getLandingPage']);
Route::get('/news', [PageController::class, 'getNewsPage'])->name('newsPage');
Route::get('/news/{newsId}', [PageController::class, 'getNews'])->name('news');
Route::get('/about', [LandingController::class, 'getAboutPage']);

Route::prefix('admin')->group(function() {
    Route::get('/posts', [PostsController::class, 'getPosts'])->middleware('user.auth')->name('posts.page');
    Route::get('/posts/{post}', [PostsController::class, 'getPost'])->middleware('user.auth');
    Route::post('/posts', [PostsController::class, 'postBlogPost'])->middleware('user.auth')->name('new-post');
    Route::get('/profile', [UserAuth::class, 'adminProfile'])->middleware('user.auth')->name('admprf');
    
    Route::get('/posts/delete/{id}', [PostsController::class, 'deletePost'])->middleware('user.auth')->name('del-post');
    Route::get('posts/edit/{id}', [PostsController::class, 'editPost'])->middleware('user.auth');
    Route::post('/posts/update', [PostsController::class, 'update'])->middleware('user.auth')->name('update-post');
});

Route::get('/login', [UsersController::class, 'login'])->name('login.page');
Route::get('/logout', [UsersController::class, 'logout'])->name('logout.user');
Route::get('/profile', [UserAuth::class, 'userProfile'] )->name('userprf');

Route::post('/auth', [UsersController::class, 'auth'])->name('auth.user');
Route::get('/register', [RegisterUserController::class, 'register'])->name('register.page');
Route::post('/registerUser', [RegisterUserController::class, 'createAccount'])->name('register.user');