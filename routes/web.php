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
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
// Route::get('doaddstudent', [StudentController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    
    Route::get('waiting', [App\Http\Controllers\AuthController::class, 'waiting'])->name('waiting');
       Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
       Route::get('logout', [AuthController::class, 'logout'])->name('logout');
       Route::middleware(['admin'])->group(function () {
           Route::get('admin', [AdminController::class, 'index']);
           Route::get('/addstudent', [AuthController::class, 'showStudentRegister'])->name('addstudent');
           Route::post('/addstudent', [StudentController::class, 'doAddStudent']);
           Route::get('/studentdata', [StudentController::class, 'retrieve'])->name('studentdata');
           Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('studentedit');
           Route::post('/student/update/{id}', [StudentController::class, 'update']);
           Route::get('student/delete/{id}', [StudentController::class, 'delete'])->name('delete');
           Route::resource('student', StudentController::class);
           
       });
    
       Route::middleware(['student'])->group(function () {
           Route::get('student', [StudentController::class, 'index']);
       });

       Route::middleware(['staff'])->group(function () {
           Route::get('staff', [StaffController::class, 'index']);
       });
    
      
   });
