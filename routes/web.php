<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LanguageController;
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

Route::middleware(['auth', 'user-middleware:0'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
Route::middleware(['auth', 'user-middleware:1'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('/customers', CustomerController::class);
    Route::get('/emails/{id}',[EmailController::class,'getEmail'])->name('customers.email');
    Route::post('/emails/{id}',[EmailController::class,'updateEmail'])->name('emails.updateEmail');
    
});
  
Route::middleware(['auth', 'user-middleware:2'])->group(function () {
  
    Route::get('/otherRole/home', [HomeController::class, 'otherHome'])->name('other.home');
});

Route::get('/lang',[LanguageController::class,'lang']);

Route::get('/change/{locale}',[LanguageController::class,'changeLang']);
