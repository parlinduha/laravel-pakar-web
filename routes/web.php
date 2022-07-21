<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::middleware('role:admin')->get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Posts
Route::resource('admin/posts',\App\Http\Controllers\PostController::class);
Route::resource('admin/users',\App\Http\Controllers\UserController::class);
Route::resource('admin/symptoms',\App\Http\Controllers\SymptomController::class);
Route::resource('admin/diseases',\App\Http\Controllers\DiseaseController::class);
Route::resource('admin/relations',\App\Http\Controllers\RelationController::class);

// Guest
Route::resource('diagnosis',\App\Http\Controllers\TestController::class);
Route::resource('basis-pengetahuan',\App\Http\Controllers\ProfileController::class);

// Route::get(/basis)

Route::get('admin/add',[StudentController::class,'index']);
Route::post('admin/save',[StudentController::class,'save'])->name('student.save');

Route::get('/profile',[App\Http\Controllers\WelcomeController::class,'profile'])->name('profile');
Route::post('/profile/save',[App\Http\Controllers\WelcomeController::class,'upload_profile'])->name('save_profile');

Route::get('/profile/update',[App\Http\Controllers\WelcomeController::class,'profile_update'])->name('profile_update');

Route::get('/profile/password',[App\Http\Controllers\WelcomeController::class,'profile_password'])->name('profile_password');
Route::patch('/updatePassword', [App\Http\Controllers\WelcomeController::class, 'updatePassword'])->name('updatePassword');