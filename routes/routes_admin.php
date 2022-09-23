<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\KelurahanController;
use App\Http\Controllers\Admin\VisiController;
use App\Http\Controllers\Admin\StrukturController;
use App\Http\Controllers\Admin\SarprasController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\PemberdayaanController;
use App\Http\Controllers\Admin\KelembagaanController;

Route::prefix('administrator')->group(function() {
    Route::get('/', function() {
        if(!Auth::user()) {
            return redirect()->route('admin.login');
        }else {
            return redirect()->route('dashboard');
        }
    });
    Route::get('/login', [AuthController::class,'login'])->name('admin.login');
    Route::post('/login', [AuthController::class,'do_login'])->name('admin.dologin');

    Route::group(['middleware' => 'auth:web'], function(){
        Route::prefix('/dashboard')->group( function() {
            Route::get('/', [DashboardController::class,'index'])->name('dashboard');
            Route::get('/theme', [DashboardController::class,'theme'])->name('theme');
        });
        Route::prefix('/kelurahan')->group( function() {
            Route::prefix('/profile')->group( function() {
                Route::get('/', [KelurahanController::class,'index'])->name('profilekel.index');
                Route::post('/store', [KelurahanController::class,'store'])->name('profilekel.store');
                Route::get('/edit/{id}', [KelurahanController::class,'edit'])->name('profilekel.edit');
                Route::post('/update', [KelurahanController::class,'update'])->name('profilekel.update');
            });
            Route::prefix('/visi-misi')->group( function() {
                Route::get('/', [VisiController::class,'index'])->name('visi.index');
                Route::post('/store', [VisiController::class,'store'])->name('visi.store');
                Route::get('/edit/{id}', [VisiController::class,'edit'])->name('visi.edit');
                Route::post('/update', [VisiController::class,'update'])->name('visi.update');
            });
            Route::prefix('/struktur')->group( function() {
                Route::get('/', [StrukturController::class,'index'])->name('struktur.index');
                Route::post('/store', [StrukturController::class,'store'])->name('struktur.store');
                Route::get('/edit/{id}', [StrukturController::class,'edit'])->name('struktur.edit');
                Route::post('/update', [StrukturController::class,'update'])->name('struktur.update');
            });
            Route::prefix('/sarana-prasarana')->group( function() {
                Route::get('/', [SarprasController::class,'index'])->name('sarpras.index');
                Route::post('/store', [SarprasController::class,'store'])->name('sarpras.store');
                Route::get('/edit/{id}', [SarprasController::class,'edit'])->name('sarpras.edit');
                Route::post('/update', [SarprasController::class,'update'])->name('sarpras.update');
            });
        });
        Route::prefix('/kegiatan')->group( function() {
            Route::get('/', [ActivityController::class,'index'])->name('activity.index');
            Route::get('/get-data-list', [ActivityController::class,'get_data_list'])->name('activity.list');
            Route::get('/create', [ActivityController::class,'create'])->name('activity.create');
            Route::post('/store', [ActivityController::class,'store'])->name('activity.store');
            Route::get('/edit/{id}', [ActivityController::class,'edit'])->name('activity.edit');
            Route::post('/update', [ActivityController::class,'update'])->name('activity.update');
            Route::get('/delete/{id}', [ActivityController::class,'delete'])->name('activity.delete');
        });
        Route::prefix('/pemberdayaan')->group( function() {
            Route::get('/', [PemberdayaanController::class,'index'])->name('pemberdayaan.index');
            Route::get('/get-data-list', [PemberdayaanController::class,'get_data_list'])->name('pemberdayaan.list');
            Route::get('/create', [PemberdayaanController::class,'create'])->name('pemberdayaan.create');
            Route::post('/store', [PemberdayaanController::class,'store'])->name('pemberdayaan.store');
            Route::get('/edit/{id}', [PemberdayaanController::class,'edit'])->name('pemberdayaan.edit');
            Route::post('/update', [PemberdayaanController::class,'update'])->name('pemberdayaan.update');
            Route::get('/delete/{id}', [PemberdayaanController::class,'delete'])->name('pemberdayaan.delete');
        });
        Route::prefix('/service')->group( function() {
            Route::get('/', [ServiceController::class,'index'])->name('service.index');
            Route::get('/get-data-list', [ServiceController::class,'get_data_list'])->name('service.list');
            Route::get('/create', [ServiceController::class,'create'])->name('service.create');
            Route::post('/store', [ServiceController::class,'store'])->name('service.store');
            Route::get('/edit/{id}', [ServiceController::class,'edit'])->name('service.edit');
            Route::post('/update', [ServiceController::class,'update'])->name('service.update');
            Route::get('/delete/{id}', [ServiceController::class,'delete'])->name('service.delete');
        });
        Route::prefix('/kelembagaan')->group( function() {
            Route::get('/', [KelembagaanController::class,'index'])->name('kelembagaan.index');
            Route::get('/get-data-list', [KelembagaanController::class,'get_data_list'])->name('kelembagaan.list');
            Route::get('/create', [KelembagaanController::class,'create'])->name('kelembagaan.create');
            Route::post('/store', [KelembagaanController::class,'store'])->name('kelembagaan.store');
            Route::get('/edit/{id}', [KelembagaanController::class,'edit'])->name('kelembagaan.edit');
            Route::post('/update', [KelembagaanController::class,'update'])->name('kelembagaan.update');
            Route::get('/delete/{id}', [KelembagaanController::class,'delete'])->name('kelembagaan.delete');
        });

        Route::prefix('/setting')->group( function() {
            Route::prefix('/banner')->group( function() {
                Route::get('/', [BannerController::class,'index'])->name('banner.index');
                Route::get('/get-data-list', [BannerController::class,'get_data_list'])->name('banner.list');
                Route::get('/create', [BannerController::class,'create'])->name('banner.create');
                Route::post('/store', [BannerController::class,'store'])->name('banner.store');
                Route::get('/edit/{id}', [BannerController::class,'edit'])->name('banner.edit');
                Route::post('/update', [BannerController::class,'update'])->name('banner.update');
                Route::get('/delete/{id}', [BannerController::class,'delete'])->name('banner.delete');
            });

            Route::prefix('/profile')->group( function() {
                Route::get('/', [ProfileController::class,'index'])->name('profile.index');
                Route::post('/store', [ProfileController::class,'store'])->name('profile.store');
            });

            Route::prefix('/upload-file')->group( function() {
                Route::get('/', [UploadController::class,'index'])->name('upload.index');
                Route::get('/create', [UploadController::class,'create'])->name('upload.create');
                Route::post('/store', [UploadController::class,'store'])->name('upload.store');
                Route::get('/edit/{id}', [UploadController::class,'edit'])->name('upload.edit');
                Route::post('/update', [UploadController::class,'update'])->name('upload.update');
                Route::get('/delete/{id}', [UploadController::class,'delete'])->name('upload.delete');
            });
        });

        Route::prefix('/users')->group( function() {
            Route::get('/', [UserController::class,'index'])->name('user.index');
            Route::get('/get-data-list', [UserController::class,'get_data_list'])->name('user.list');
            Route::get('/create', [UserController::class,'create'])->name('user.create');
            Route::post('/store', [UserController::class,'store'])->name('user.store');
            Route::get('/edit/{id}', [UserController::class,'edit'])->name('user.edit');
            Route::post('/update', [UserController::class,'update'])->name('user.update');
            Route::get('/delete/{id}', [UserController::class,'delete'])->name('user.delete');
        });

        Route::prefix('/profile')->group( function() {
            Route::get('/change-password', [AccountController::class,'change_password'])->name('profile.changepassword');
            Route::post('/set-password', [AccountController::class,'set_password'])->name('profile.setpassword');
        });
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
