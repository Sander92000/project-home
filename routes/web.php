<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
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

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/property/new', [PropertyController::class, 'index'])->middleware('auth')->name('property.new');
Route::post('/property/create', [PropertyController::class, 'create'])->middleware('auth')->name('property.create');
Route::get('/property/{id}', [PropertyController::class, 'show'])->middleware('auth')->name('property.show');
Route::delete('/property/delete/{id}', [PropertyController::class, 'delete'])->middleware('auth')->name('property.delete');
Route::post('/property/update/{id}', [PropertyController::class, 'update'])->middleware('auth')->name('property.update');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile');
Route::get('/profile/settings', [ProfileController::class, 'settings'])->middleware('auth')->name('profile.settings');



Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('user.authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('user.register');
Route::post('/create', [AuthController::class, 'create'])->name('user.create');
Route::post('/forgot', [AuthController::class, 'forgot'])->name('user.forgot.password');
Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
