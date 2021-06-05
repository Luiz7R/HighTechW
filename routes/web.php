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
Route::get('/about', [LandingController::class, 'getAboutPage']);

Route::get('/admin/posts', [PostsController::class, 'getPosts'])->middleware('user.auth');
Route::post('/admin/posts', [PostsController::class, 'postBlogPost'])->middleware('user.auth')->name('new-post');
Route::get('/admin/posts/{post}', [PostsController::class, 'getPost'])->middleware('user.auth');

Route::get('/posts/delete/{id}', [PostsController::class, 'deletePost'])->middleware('user.auth');
Route::get('/posts/edit/{id}', [PostsController::class, 'editPost'])->middleware('user.auth');
Route::post('/posts/update', [PostsController::class, 'update'])->middleware('user.auth');

Route::get('/admin/register', [RegisterUserController::class, 'createPage'])->name('register');
Route::post('/admin/reg', [RegisterUserController::class, 'createAccount'])->name('registerAcc');
Route::get('/admin/profile', [UserAuth::class, 'adminProfile'] )->middleware('user.auth')->name('admprf');

Route::get('/login', [UsersController::class, 'login'])->name('login.page');
Route::get('/profile', [UserAuth::class, 'userProfile'] )->name('userprf');

Route::get('/logout', [UsersController::class, 'logout'])->name('logout.user');
Route::post('/auth', [UsersController::class, 'auth'])->name('auth.user');
Route::view('/register', 'admin.register');
Route::post('/registerUser', [RegisterUserController::class, 'createAccount'])->name('register.user');