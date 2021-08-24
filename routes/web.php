<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
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

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    
       Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
       Route::get('logout', [AuthController::class, 'logout'])->name('logout');
       Route::middleware(['admin'])->group(function () {
           Route::get('admin', [AdminController::class, 'index']);
           Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
           Route::post('register', [AuthController::class, 'register']);
       });
    
       Route::middleware(['student'])->group(function () {
           Route::get('student', [StudentController::class, 'index']);
       });

       Route::middleware(['staff'])->group(function () {
           Route::get('staff', [StaffController::class, 'index']);
       });
    
      
   });
