<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controller\SiswaController;

// use app\Http\Controllers\MatapelajaranController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', function () { return view('admin.dashboard'); })->middleware('checkRole:admin');
Route::get('siswa', function () { return view('siswa'); })->middleware(['checkRole:siswa,admin']);
Route::get('tu', function () { return view('tu'); })->middleware(['checkRole:tu,admin']);
Auth::routes();


Route::get('admin/dashboard',[App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');


// CRUD DATA SISWA DAN ALUMNI ---------------------------------------------------------------------------------------------------------------

// Siswa CRUD
// Route::get('/admin/siswadanalumni/datasiswa/index',[App\Http\Controllers\SiswaController::class, 'index'])->name('data.siswa');
// Route::get('/admin/siswadanalumni/datasiswa/tambah',[App\Http\Controllers\SiswaController::class,'create'])->name('data.tambah');
// Route::post('/admin/siswadanalumni/datasiswa/add',[App\Http\Controllers\SiswaController::class,'store'])->name('store.siswa');
// Route::get('/admin/siswadanalumni/datasiswa/edit/{id}',[App\Http\Controllers\SiswaController::class,'edit'])->name('edit.siswa');
// Route::put('/admin/siswadanalumni/datasiswa/update/{id}',[App\Http\Controllers\SiswaController::class,'update'])->name('update.siswa');
// Route::delete('/admin/siswadanalumni/datasiswa/data/{id}',[App\Http\Controllers\SiswaController::class,'destroy'])->name('delete.siswa');

// Alumni CRUD




// CRUD MANAJEMEN DATA-----------------------------------------------------------------------------------------------------------------------

// Mata Pelajaran CRUD
Route::get('/admin/manajemendata/matapelajaran/index',[App\Http\Controllers\MatapelajaranController::class, 'index'])->name('data.matapelajaran');

// Nilai Siswa CRUD
Route::get('/admin/manajemendata/nilaisiswa/index',[App\Http\Controllers\NilaisiswaController::class, 'index'])->name('data.nilaisiswa');

// // Ekstrakulikuler Siswa CRUD
Route::get('/admin/manajemendata/ekstrakulikuler/index',[App\Http\Controllers\EkstrakulikulerController::class, 'index'])->name('data.ekstrakulikuler');

// // Status Pembayaran Siswa CRUD
Route::get('/admin/manajemendata/pembayaransiswa',[App\Http\Controllers\PembayaransiswaController::class, 'index'])->name('data.pembayaransiswa');

// // Rapor Siswa CRUD
Route::get('/data',[EkstrakulikulerController::class,'index'])->name('data.ekstrakulikuler');


// CRUD DATA MASTER----------------------------------------------------------------------------------------------------------------------------

// Jadwal CRUD
Route::get('/admin/datamaster/datajadwal/index',[App\Http\Controllers\DatajadwalController::class, 'index'])->name('data.jadwal');

// Siswa CRUD
Route::get('/admin/datamaster/datasiswa/index',[App\Http\Controllers\SiswaController::class, 'index'])->name('data.siswa');
Route::get('/admin/datamaster/datasiswa/tambah',[App\Http\Controllers\SiswaController::class,'create'])->name('data.tambah');
Route::post('/admin/datamaster/datasiswa/add',[App\Http\Controllers\SiswaController::class,'store'])->name('store.siswa');
Route::get('/admin/datamaster/datasiswa/edit/{id}',[App\Http\Controllers\SiswaController::class,'edit'])->name('edit.siswa');
Route::put('/admin/datamaster/datasiswa/update/{id}',[App\Http\Controllers\SiswaController::class,'update'])->name('update.siswa');
Route::delete('/admin/datamaster/datasiswa/data/{id}',[App\Http\Controllers\SiswaController::class,'destroy'])->name('delete.siswa');

// Guru CRUD
Route::get('/admin/datamaster/dataguru/index',[App\Http\Controllers\DataguruController::class, 'index'])->name('data.guru');
Route::get('/admin/datamaster/dataguru/tambah',[App\Http\Controllers\DataguruController::class,'create'])->name('data.tambah');
Route::post('/admin/datamaster/dataguru/add',[App\Http\Controllers\DataguruController::class,'store'])->name('store.guru');
Route::get('/admin/datamaster/dataguru/edit/{id}',[App\Http\Controllers\DataguruController::class,'edit'])->name('edit.guru');
Route::put('/admin/datamaster/dataguru/update/{id}',[App\Http\Controllers\DataguruController::class,'update'])->name('update.guru');
Route::delete('/admin/datamaster/dataguru/data/{id}',[App\Http\Controllers\DataguruController::class,'destroy'])->name('delete.guru');


