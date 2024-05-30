<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
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

// Home Page Routes
Route::get('/',[HomeController::class, "index"])->name('app.home');
Route::get('/login', [HomeController::class, "login"])->name('app.login');
Route::get('/signup', [HomeController::class, "signup"])->name('app.signup');
Route::get('/projects', [HomeController::class, "projects"])->name('app.projects');
Route::get('/submittions', [HomeController::class, "submittions"])->name('app.submittions');
Route::get('/ideas', [HomeController::class, "ideas"])->name('app.ideas');
Route::get('/about', [HomeController::class, "about"])->name('app.about');
Route::get('/review/{id}', [HomeController::class, "review"])->name('app.review');

// user proccessing routes
Route::post('/signup', [UsersController::class, "signup"])->name('app.proc.signup');
Route::post('/login', [UsersController::class, "login"])->name('app.proc.login');
Route::post('/submittions', [UsersController::class, "submittions"])->name('app.proc.submittions');
Route::post('/ideas', [UsersController::class, "ideas"])->name('app.pro.ideas');
Route::get('/logout', [UsersController::class, "logout"])->name('app.proc.logout');

Route::group(['middleware' => 'admin'], function () {
// admin proccessing routes
Route::get('/admin', [AdminController::class, "index"])->name('app.admin');
Route::get('/admin/review/{id}', [AdminController::class, "review"])->name('app.admin.review');
Route::get('/accept_project/{id}', [AdminController::class, "accept"])->name('app.admin.accept_project');
Route::get('/delete_project/{id}', [AdminController::class, "delete"])->name('app.admin.delete_project');
});