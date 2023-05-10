<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
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
//ログイン画面のルート・表示
Route::get('/', [AuthController::class, 'showLogin'])->name('showLogin');
//ログイン処理
Route::post('login', [AuthController::class, 'login'])->name('login');
