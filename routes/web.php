<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatanController;

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

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');

//dashboard
Route::get('/main', function () {
    return view('dashboard');
});

//catatan perjalanan
Route::get('/catatan', [CatatanController::class,'index'])->name('catatan');
Route::get('/isicatatan', [CatatanController::class,'isicatatan'])->name('isicatatan');
Route::post('/insertcatatan', [CatatanController::class,'insertcatatan'])->name('insertcatatan');

