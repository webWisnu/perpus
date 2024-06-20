<?php

use App\Http\Middleware\user;
use App\Http\Middleware\Login;
use Illuminate\Routing\Router;
use App\Http\Controllers\AuthLogin;
use App\Http\Middleware\checklogin;
use App\Http\Middleware\only_admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\BookrentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Auth\LogoutController;

Route::get('/', [PublicController::class, 'index']);

Route::middleware('guest')->group(function () {
    Route::get('/home', [HomeController::class, 'home']);
    Route::post('/login', [AuthLogin::class, 'authentication']);
    Route::get('/login', [AuthLogin::class, 'login'])->name('/login');
    Route::get('/register', [RegisterController::class, 'register']);
    Route::post('/register', [RegisterController::class, 'registersubmit']);
});





Route::middleware('login')->group(function () {
    Route::get('/logout', [AuthLogin::class, 'logout']);
    Route::get('/profil', [UserController::class, 'profil'])->middleware('user');
    Route::post('/profil-ubah', [UserController::class, 'profilUpdate'])->middleware('user');


    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);

        Route::get('books', [BookController::class, 'index']);
        Route::get('/book-add', [BookController::class, 'add']);
        Route::post('/book-add', [BookController::class, 'store']);
        Route::get('/book-edit/{slug}', [BookController::class, 'edit']);
        Route::post('/book-edit/{slug}', [BookController::class, 'update']);
        Route::get('/book-delete/{slug}', [BookController::class, 'delete']);
        Route::get('/book-destroy/{slug}', [BookController::class, 'destroy']);
        Route::get('/book-deleted', [BookController::class, 'deleted']);
        Route::get('/book-restore/{slug}', [BookController::class, 'restore']);

        Route::get('/categories', [CategoriesController::class, 'index']);
        Route::get('/category', [CategoriesController::class, 'tambah']);
        Route::post('/category', [CategoriesController::class, 'store']);
        Route::get('/category-edit/{slug}', [CategoriesController::class, 'edit']);
        Route::put('/category-edit/{slug}', [CategoriesController::class, 'update']);
        Route::get('/category-delete/{slug}', [CategoriesController::class, 'delete']);
        Route::get('/category-destroy/{slug}', [CategoriesController::class, 'destroy']);
        Route::get('/category-deleted', [CategoriesController::class, 'deletedCategory']);
        Route::get('/category-restore/{slug}', [CategoriesController::class, 'restore']);

        Route::get('/user', [UserController::class, 'index']);
        Route::get('/user-registered', [UserController::class, 'registeredUser']);
        Route::get('/user-detail/{slug}', [UserController::class, 'UserShow']);
        Route::get('/user-approve/{slug}', [UserController::class, 'approve']);
        Route::get('/user-block/{slug}', [UserController::class, 'delete']);
        Route::get('/user-destroy/{slug}', [UserController::class, 'destroy']);
        Route::get('/user-block', [UserController::class, 'blockUser']);
        Route::get('/user-restore/{slug}', [UserController::class, 'UserRestore']);
    });
    Route::get('/book-rent', [BookrentController::class, 'index']);
    Route::post('/book-rent', [BookrentController::class, 'store']);
    Route::get('/Logpinjam', [RentController::class, 'index']);
    Route::get('/book-return', [BookrentController::class, 'BookReturn']);
    Route::post('/book-return', [BookrentController::class, 'SaveReturnBook']);
});
