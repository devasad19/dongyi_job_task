<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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
    return view('backend.index');
});

Route::get('/user-account/list', [AccountController::class, 'userAccountList'])->name('userAccountList');
Route::post('/user/make-transaction', [AccountController::class, 'makeTransaction'])->name('user.makeTransaction');
Route::get('/user/transactions', [AccountController::class, 'userTransaction'])->name('user.transactions');
