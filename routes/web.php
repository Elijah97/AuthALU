<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Auth::routes();
Route::match(['get', 'post'], '/register', function () {
    return redirect('/');
});
Route::get('/', [AuthController::class, 'index']);
Route::get('/123ABCXYZ', [AuthController::class, 'viewRegister'])->name('register');
Route::post('/123ABCXYZ', [AuthController::class, 'adminRegister'])->name('register');
Route::get('/home', [HomeController::class, 'index'])->name('home');
