<?php

use App\Models\Catatan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\RegisterController;

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

//register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

//hak akses
Route::group(['middleware'=>['auth','hakakses:user']], function(){
    Route::get('/catatan', [CatatanController::class,'index'])->name('catatan');
});

//dashboard
Route::get('/main', function () {
    $jumlahcatatan = Catatan::count();
    return view('dashboard', compact('jumlahcatatan'));
});

Route::get('/profile', function () {
    return view('profile');
});

//catatan perjalanan
Route::get('/catatan', [CatatanController::class,'index'])->name('catatan');
Route::get('/isicatatan', [CatatanController::class,'isicatatan'])->name('isicatatan');
Route::post('/insertcatatan', [CatatanController::class,'insertcatatan'])->name('insertcatatan');
