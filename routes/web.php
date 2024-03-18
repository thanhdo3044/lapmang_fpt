<?php

use App\Http\Controllers\admin\BlogMenuController;
use App\Http\Controllers\admin\BlogTinhThanh;
use App\Http\Controllers\admin\khuvucController;
use App\Http\Controllers\admin\tinhthanhController;
use App\Http\Controllers\login\loginController;
use App\Http\Controllers\MenuController;
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

Route::middleware('admin')->group(function () {
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



    Route::get('/bai-viet-menu', [BlogMenuController::class, 'index'])->name('menu.index');
    Route::get('/add-bai-viet-menu', [BlogMenuController::class, 'create'])->name('menu.create');
    Route::match(['get', 'post'], '/upload', [BlogMenuController::class, 'upload'])->name('menu.upload');
    Route::post('/add-bai-viet-menu', [BlogMenuController::class, 'store'])->name('menu.store');
    Route::get('/sua-bai-viet/{id}', [BlogMenuController::class, 'show'])->name('menu.edit');
    Route::post('/sua-bai-viet/{id}', [BlogMenuController::class, 'update'])->name('menu.update');


    Route::get('/chat', function () {
        return view('admin.chat.index'); 
    })->name('chat');
});


// Đăng nhập-đăng kí
Route::get('/login', [loginController::class, 'index'])->name('auth.index');
Route::post('/sign-up', [loginController::class, 'signUp'])->name('auth.signup');
Route::post('/login', [loginController::class, 'login'])->name('auth.login');
Route::get('/logout', [loginController::class, 'logout'])->name('auth.logout');
Route::get('/dang-ky', [loginController::class, 'dangky'])->name('auth.dang_ky');


// MENU


Route::get('/', [MenuController::class, 'trangchu'])->name('menu.trangchu');
Route::get('/internet-fpt', [MenuController::class, 'internet'])->name('menu.internet');
Route::get('/camera-fpt', [MenuController::class, 'camera'])->name('menu.camera');
Route::get('/truyen-hinh-fpt', [MenuController::class, 'truyenhinh'])->name('menu.truyenhinh');
Route::get('/goi-cuoc-co-ban', [MenuController::class, 'goicuoccb'])->name('menu.goicuoccb');
Route::get('/goi-cuoc-mo-rong', [MenuController::class, 'goicuocmr'])->name('menu.goicuocmr');
Route::get('/danh-sach-kenh', [MenuController::class, 'danhsachkenh'])->name('menu.danhsachkenh');
Route::get('/fpt-play-box', [MenuController::class, 'playbox'])->name('menu.playbox');
Route::get('/ho-tro-fpt', [MenuController::class, 'hotro'])->name('menu.hotro');
Route::get('/ho-tro-ki-thuat', [MenuController::class, 'spkithuat'])->name('menu.spkithuat');
Route::get('/thu-tuc-va-chinh-sach', [MenuController::class, 'ttvscs'])->name('menu.ttvacs');


