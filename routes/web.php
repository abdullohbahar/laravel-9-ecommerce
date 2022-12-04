<?php

use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\AdminController;
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

Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});


// User Routing
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Admin Routing
Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard')->middleware('auth:admin');
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category')->middleware('auth:admin');
    Route::get('/admin/create-category', [CategoryController::class, 'index'])->name('admin.create-category')->middleware('auth:admin');
    Route::get('/admin/coupon', [CouponController::class, 'index'])->name('admin.coupon')->middleware('auth:admin');
    Route::get('/admin/banner', [BannerController::class, 'index'])->name('admin.banner')->middleware('auth:admin');
});
