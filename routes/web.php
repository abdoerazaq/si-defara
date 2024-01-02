<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PembayaranController;
use App\Models\Member;
use App\Models\Pembayaran;

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

Route::get('/', [DashboardController::class,'index']);

Route::resource('/member', MemberController::class,);
Route::resource('/pembayaran',PembayaranController::class,);

Route::get('/pembayaran-export',[PembayaranController::class,'export']);
Route::get('/member-export',[MemberController::class,'export']);