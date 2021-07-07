<?php

use App\Http\Livewire\Admin\Edit;
use App\Http\Livewire\Dudi\Detail;
use App\Http\Livewire\Dudi\Sunting;
use App\Http\Livewire\Dudi\Tambah;
use App\Http\Livewire\Jurusan\Semua;
use App\Http\Livewire\PilihPenempatan;
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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::group(['prefix' => 'admin'], function(){
        Route::get('/semua', \App\Http\Livewire\Admin\Semua::class)->name('admin.semua');
        Route::get('tambah', \App\Http\Livewire\Admin\Tambah::class)->name('admin.tambah');
        Route::get('sunting/{id}', Edit::class)->name('admin.edit');
        Route::get('detail{id}', \App\Http\Livewire\Admin\Detail::class)->name('admin.detail');
    });

    Route::group(['prefix' => 'siswa'], function(){
        Route::get('semua', \App\Http\Livewire\Siswa\Semua::class)->name('siswa.semua');
        Route::get('tambah', \App\Http\Livewire\Siswa\Tambah::class)->name('siswa.tambah');
        Route::get('sunting/{id}', \App\Http\Livewire\Siswa\Sunting::class)->name('siswa.sunting');
        Route::get('detail/{id}', \App\Http\Livewire\Siswa\Detail::class)->name('siswa.detail');
    });

    Route::group(['prefix' => 'dudi'], function (){
       Route::get('semua', \App\Http\Livewire\Dudi\Semua::class)->name('dudi.semua');
       Route::get('tambah', Tambah::class)->name('dudi.tambah');
       Route::get('sunting/{id}', Sunting::class)->name('dudi.sunting');
       Route::get('detail/{id}', Detail::class)->name('dudi.detail');
    });

    Route::get('jurusan', Semua::class)->name('jurusan.semua');

    Route::get('pilih-penempatan', PilihPenempatan::class)->name('pilih-penempatan');

    Route::group(['prefix' => 'absensi'], function(){
        Route::get('semua', \App\Http\Livewire\Absensi\Semua::class)->name('absensi.semua');
    });
    Route::get('lokasi', function (){
       $lokasi = \Stevebauman\Location\Facades\Location::get();
       dd($lokasi);
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', \App\Http\Livewire\Dashboard::class)->name('dashboard');
