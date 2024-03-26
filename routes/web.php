<?php

use App\Http\Controllers\admin\BlogMenuController;
use App\Http\Controllers\admin\BlogTinhThanh;
use App\Http\Controllers\admin\khuvucController;
use App\Http\Controllers\admin\khuvucMB;
use App\Http\Controllers\admin\khuvucMN;
use App\Http\Controllers\admin\khuvucMT;
use App\Http\Controllers\admin\serviceSignupCtr;
use App\Http\Controllers\admin\tinhthanhController;
use App\Http\Controllers\admin\tinhthanhCtrl;
use App\Http\Controllers\admin\tintucCtrl;
use App\Http\Controllers\login\loginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\showttContorller as ControllersShowttContorller;
use App\Http\Controllers\showttController;
use App\Models\baiviet;
use App\Models\khuvuc;
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
    Route::get('/dashboard',[serviceSignupCtr::class, 'index'])->name('dashboard');
    
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
    Route::post('/upload', [BlogMenuController::class, 'upload'])->name('menu.upload');
    Route::post('/add-bai-viet-menu', [BlogMenuController::class, 'store'])->name('menu.store');
    Route::get('/edit/{id}',[BlogMenuController::class, 'show'])->name('menu.edit');
    Route::post('update/{id}', [BlogMenuController::class, 'update'])->name('menu.update');


    //khu vực hà nội
    Route::get('/bai-viet-kvhn', [tinhthanhCtrl::class, 'index'])->name('blogtt.index');
    Route::get('/add-bai-viet', [tinhthanhCtrl::class, 'create'])->name('blogtt.create');
    Route::match(['get', 'post'], '/upload', [tinhthanhCtrl::class, 'upload'])->name('blogtt.upload');
    Route::post('/add-bai-viet-kvhn', [tinhthanhCtrl::class, 'store'])->name('blogtt.store');
    Route::get('/sua-bai-viet/{id}', [tinhthanhCtrl::class, 'show'])->name('blogtt.edit');
    Route::post('/sua-bai-viet/{id}', [tinhthanhCtrl::class, 'update'])->name('blogtt.update');

    //khu vực miền bắc
    Route::prefix('kvmb')->group(function () {
        Route::get('/bai-viet', [khuvucMB::class, 'index'])->name('blogmb.index');
        Route::get('/add-bai-viet', [khuvucMB::class, 'create'])->name('blogmb.create');
        Route::match(['get', 'post'], '/upload', [khuvucMB::class, 'upload'])->name('blogmb.upload');
        Route::post('/add-bai-viet', [khuvucMB::class, 'store'])->name('blogmb.store');
        Route::get('/sua-bai-viet/{id}', [khuvucMB::class, 'show'])->name('blogmb.edit');
        Route::post('/sua-bai-viet/{id}', [khuvucMB::class, 'update'])->name('blogmb.update');
    });
    Route::prefix('kvmt')->group(function () {
        Route::get('/bai-viet', [khuvucMT::class, 'index'])->name('blogmt.index');
        Route::get('/add-bai-viet', [khuvucMT::class, 'create'])->name('blogmt.create');
        Route::match(['get', 'post'], '/upload', [khuvucMT::class, 'upload'])->name('blogmt.upload');
        Route::post('/add-bai-viet', [khuvucMT::class, 'store'])->name('blogmt.store');
        Route::get('/sua-bai-viet/{id}', [khuvucMT::class, 'show'])->name('blogmt.edit');
        Route::post('/sua-bai-viet/{id}', [khuvucMT::class, 'update'])->name('blogmt.update');
    });
    Route::prefix('kvmn')->group(function () {
        Route::get('/bai-viet', [khuvucMN::class, 'index'])->name('blogmn.index');
        Route::get('/add-bai-viet', [khuvucMN::class, 'create'])->name('blogmn.create');
        Route::match(['get', 'post'], '/upload', [khuvucMN::class, 'upload'])->name('blogmn.upload');
        Route::post('/add-bai-viet', [khuvucMN::class, 'store'])->name('blogmn.store');
        Route::get('/sua-bai-viet/{id}', [khuvucMN::class, 'show'])->name('blogmn.edit');
        Route::post('/sua-bai-viet/{id}', [khuvucMN::class, 'update'])->name('blogmn.update');
    });
    Route::prefix('tin-tuc')->group(function () {
        Route::get('/bai-viet', [tintucCtrl::class, 'index'])->name('tintuc.index');
        Route::get('/add-bai-viet', [tintucCtrl::class, 'create'])->name('tintuc.create');
        Route::match(['get', 'post'], '/upload', [tintucCtrl::class, 'upload'])->name('tintuc.upload');
        Route::post('/add-bai-viet', [tintucCtrl::class, 'store'])->name('tintuc.store');
        Route::get('/sua-bai-viet/{id}', [tintucCtrl::class, 'show'])->name('tintuc.edit');
        Route::post('/sua-bai-viet/{id}', [tintucCtrl::class, 'update'])->name('tintuc.update');
    });

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


// Route::get('/', [MenuController::class, 'trangchu'])->name('menu.index');
Route::get('/', [MenuController::class, 'trangchu'])->name('menu.trangchu');
Route::get('/internet-fpt-dich-vu-cung-cap-cap-quang-gia-re-toc', [MenuController::class, 'internet'])->name('menu.internet');
Route::get('/lap-dat-camera-fpt-camera-fpt', [MenuController::class, 'camera'])->name('menu.camera');
Route::get('/dang-ky-lap-dat-truyen-hinh-fpt-truyen-hinh-internet-so-1-viet-nam', [MenuController::class, 'truyenhinh'])->name('menu.truyenhinh');
Route::get('/nhung-tinh-nang-goi-cuoc-co-ban-cua-truyen-hinh-fpt-2024', [MenuController::class, 'goicuoccb'])->name('menu.goicuoccb');
Route::get('/nhung-tinh-nang-goi-cuoc-mo-rong-cua-truyen-hinh-fpt-2024', [MenuController::class, 'goicuocmr'])->name('menu.goicuocmr');
Route::get('/danh-sach-kenh-moi-nhat-cua-truyen-hinh-fpt-lien-tuc-cap-nhat', [MenuController::class, 'danhsachkenh'])->name('menu.danhsachkenh');
Route::get('/fpt-play-box-tv-box-giai-tri-hang-dau-viet-nam-bien-tivi-thuong-thanh-smart-tv', [MenuController::class, 'playbox'])->name('menu.playbox');
Route::get('/tong-dai-ho-tro-ky-thuat-mang-fpt-telecom', [MenuController::class, 'hotro'])->name('menu.hotro');
Route::get('/tong-dai-ho-tro-ky-thuat-mang-fpt-telecom', [MenuController::class, 'spkithuat'])->name('menu.spkithuat');
Route::get('/huong-dan-cac-thu-tuc-va-chinh-sach-cho-khach-hang-su-dung-dich-vu-cua-fpt-telecom', [MenuController::class, 'ttvscs'])->name('menu.ttvacs');
Route::get('/tin-tuc-moi-cap-nhat-moi-nhat', [MenuController::class, 'tintucnew'])->name('tintuc.new');
Route::get('/tin-tuc/{slug}', [MenuController::class, 'tintucsimilar'])->name('tintuc.similar');

//
Route::get('/{id}', [MenuController::class, 'bvtt'])->name('bvtt');



Route::post('dangkidv', [serviceSignupCtr::class, 'store'])->name('dangkidv');
