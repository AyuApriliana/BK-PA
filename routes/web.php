<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelanggaranController;


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


route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/registersave',[LoginController::class, 'registersave'])->name('registersave');
route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

route::get('/data-pelanggaran',[PelanggaranController::class,'index'])->name('data-pelanggaran');
route::get('/create-pelanggaran',[PelanggaranController::class,'create'])->name('create-pelanggaran');
route::post('/save-pelanggaran',[PelanggaranController::class,'store'])->name('save-pelanggaran');

Route::group(['middleware' => ['auth','ceklevel:admin']], function() {
    route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});


