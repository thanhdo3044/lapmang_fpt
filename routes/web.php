<?php

use App\Http\Controllers\admin\BlogTinhThanh;
use App\Http\Controllers\admin\khuvucController;
use App\Http\Controllers\admin\tinhthanhController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('template.admin');
});
Route::get('/khu-vuc', [khuvucController::class, 'index'])->name('khuvuc.index');
Route::get('/add-khu-vuc', [khuvucController::class, 'create'])->name('khuvuc.create');
Route::post('/add-khu-vuc', [khuvucController::class, 'store'])->name('khuvuc.store');
Route::get('/xoa-khu-vuc/{id}', [khuvucController::class, 'destroy'])->name('khuvuc.delete');
Route::get('/sua-khu-vuc/{id}', [khuvucController::class, 'show'])->name('khuvuc.edit');
Route::post('/sua-khu-vuc/{id}', [khuvucController::class, 'update'])->name('khuvuc.update');


Route::get('/thanh-pho', [tinhthanhController::class, 'index'])->name('tinhthanh.index');
Route::get('/add-thanh-pho', [tinhthanhController::class, 'create'])->name('tinhthanh.create');
Route::post('/add-thanh-pho', [tinhthanhController::class, 'store'])->name('tinhthanh.store');
Route::get('/xoa-thanh-pho/{id}', [tinhthanhController::class, 'destroy'])->name('tinhthanh.delete');
Route::get('/sua-thanh-pho/{id}', [tinhthanhController::class, 'show'])->name('tinhthanh.edit');
Route::post('/sua-thanh-pho/{id}', [tinhthanhController::class, 'update'])->name('tinhthanh.update');


Route::get('/bai-viet-tinh-thanh', [BlogTinhThanh::class, 'index'])->name('blog.index');
Route::get('/add-bai-viet-tinh-thanh', [BlogTinhThanh::class, 'create'])->name('blog.create');
Route::match(['get', 'post'], '/upload', [BlogTinhThanh::class, 'upload'])->name('ckedit.upload');
Route::post('/add-bai-viet-tinh-thanh', [BlogTinhThanh::class, 'store'])->name('blog.store');
Route::get('/sua-bai-viet/{id}', [BlogTinhThanh::class, 'show'])->name('blog.edit');
Route::post('/sua-bai-viet/{id}', [BlogTinhThanh::class, 'update'])->name('blog.update');