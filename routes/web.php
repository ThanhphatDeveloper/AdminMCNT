<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;




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

Route::redirect('/', '/login');

Route::get('/login',[CustomAuthController::class,'login'])->name('login');
Route::post('/login',[CustomAuthController::class,'login_action'])->name('login_action');
Route::get('/logout',[CustomAuthController::class,'logout'])->name('logout');
Route::get('/home',[DashboardController::class,'index'])->name('home')->middleware('AdminRole');


Route::get('/users',[UserInfoController::class,'index'])->name('users')->middleware('AdminRole');
Route::delete('/users/{id}', [UserController::class,'destroy'])->name('block-user')->middleware('AdminRole');
Route::post('/users/{id}', [UserController::class,'update'])->name('unblock-user')->middleware('AdminRole');



Route::get('/categories',[CategoryController::class,'index'])->name('category')->middleware('AdminRole');
Route::post('/categories',[CategoryController::class,'create'])->name('add-category')->middleware('AdminRole');
Route::get('/categories/{id}',[CategoryController::class,'edit'])->middleware('AdminRole');
Route::put('/categories',[CategoryController::class,'update'])->name('update-category')->middleware('AdminRole');
Route::delete('categories/{id}',[CategoryController::class, 'destroy'])->name('delete-category')->middleware('AdminRole');

Route::get('/add-questions',[QuestionController::class,'index'])->name('add-questions')->middleware('AdminRole');

Route::post('/add-questions',[QuestionController::class,'create'])->name('add-questions-action')->middleware('AdminRole');

Route::get('/view-questions', [QuestionController::class,'show'])->name('view-questions')->middleware('AdminRole');

Route::get('/view-questions/{id}', [QuestionController::class,'edit'])->middleware('AdminRole');
Route::put('/update-questions', [QuestionController::class,'update'])->name('update-questions')->middleware('AdminRole');
Route::delete('/view-questions/{id}', [QuestionController::class,'destroy'])->name('delete-questions')->middleware('AdminRole');
Route::post('/view-questions', [QuestionController::class,'search'])->name('search-questions')->middleware('AdminRole');

Route::get('/global-leaderboard',[UserInfoController::class,'show'])->name('global-leaderboard')->middleware('AdminRole');

Route::get('/re-password',[CustomAuthController::class,'repass'])->name('re-password')->middleware('AdminRole');

Route::post('/re-password', [CustomAuthController::class,'changepassword'])->name('change-password')->middleware('AdminRole');



