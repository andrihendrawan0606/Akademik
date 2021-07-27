<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CetakController;
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

Route::get('/login', function() {
	return view('login');
})->middleware('guest')->name('login');


// Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
// Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
// Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

// Route::group(['middleware' => ['auth']], function () {
//     Route::group(['middleware' => ['checkRole:admin']], function () {
//     	/*
//     		Route Khusus untuk role admin
//     	*/
//     Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

//         // Route::resource('admin', AdminController::class);
//     });
//     Route::group(['middleware' => ['chekRole:siswa']], function () {
//     	/*
//     		Route Khusus untuk role editor
//     	*/
//         Route::resource('siswa', AdminController::class);
//     });
// });


Route::post('/proses_login', [AuthController::class,'login'])->name('proses_login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::group(['prefix'=>'admin','middleware'=>['auth:admin']], function() {
	Route::get('/index', [AdminController::class,'index'])->name('admin.dashboard');


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
Route::get('/admin/datamaster/datasiswa/tambah',[App\Http\Controllers\SiswaController::class,'create'])->name('data.tambahsiswa');
Route::post('/admin/datamaster/datasiswa/add',[App\Http\Controllers\SiswaController::class,'store'])->name('store.siswa');
Route::get('/admin/datamaster/datasiswa/edit/{id}',[App\Http\Controllers\SiswaController::class,'edit'])->name('edit.siswa');
Route::put('/admin/datamaster/datasiswa/update/{id}',[App\Http\Controllers\SiswaController::class,'update'])->name('update.siswa');
Route::delete('/admin/datamaster/datasiswa/data/{id}',[App\Http\Controllers\SiswaController::class,'destroy'])->name('delete.siswa');

// Guru CRUD
Route::get('/admin/datamaster/dataguru/index',[App\Http\Controllers\DataguruController::class, 'index'])->name('data.guru');
Route::get('/admin/datamaster/dataguru/tambah',[App\Http\Controllers\DataguruController::class,'create'])->name('data.tambahh');
Route::post('/admin/datamaster/dataguru/add',[App\Http\Controllers\DataguruController::class,'store'])->name('store.guru');
Route::get('/admin/datamaster/dataguru/edit/{id}',[App\Http\Controllers\DataguruController::class,'edit'])->name('edit.guru');
Route::put('/admin/datamaster/dataguru/update/{id}',[App\Http\Controllers\DataguruController::class,'update'])->name('update.guru');
Route::delete('/admin/datamaster/dataguru/data/{id}',[App\Http\Controllers\DataguruController::class,'destroy'])->name('delete.guru');

// Kelas CRUD
Route::get('/admin/datamaster/datakelas/index',[App\Http\Controllers\DatakelasController::class, 'index'])->name('data.kelas');
Route::get('/admin/datamaster/datakelas/tambah',[App\Http\Controllers\DatakelasController::class,'create'])->name('data.tambah');
Route::post('/admin/datamaster/datakelas/add',[App\Http\Controllers\DatakelasController::class,'store'])->name('store.kelas3');
Route::get('/admin/datamaster/datakelas/edit/{id}',[App\Http\Controllers\DatakelasController::class,'edit'])->name('edit.kelas');
Route::put('/admin/datamaster/datakelas/update/{id}',[App\Http\Controllers\DatakelasController::class,'update'])->name('update.kelas3');
Route::delete('/admin/datamaster/datakelas/data/{id}',[App\Http\Controllers\DatakelasController::class,'destroy'])->name('delete.kelas');

// Mapel CRUD
Route::get('/admin/datamaster/matapelajaran/index',[App\Http\Controllers\MatapelajaranController::class, 'index'])->name('data.mapel');
Route::get('/admin/datamaster/matapelajaran/tambah',[App\Http\Controllers\MatapelajaranController::class,'create'])->name('data.tambahmapel');
Route::post('/admin/datamaster/matapelajaran/add',[App\Http\Controllers\MatapelajaranController::class,'store'])->name('store.mapel');
Route::get('/admin/datamaster/matapelajaran/edit/{id}',[App\Http\Controllers\MatapelajaranController::class,'edit'])->name('edit.mapel');
Route::put('/admin/datamaster/matapelajaran/update/{id}',[App\Http\Controllers\MatapelajaranController::class,'update'])->name('update.mapel');
Route::delete('/admin/datamaster/matapelajaran/data/{id}',[App\Http\Controllers\MatapelajaranController::class,'destroy'])->name('delete.mapel');

// Kategori Penilaian CRUD
Route::get('/admin/akademik/kategoripenilaian/index',[App\Http\Controllers\Kategori_penilaianController::class, 'index'])->name('data.katnilai');
Route::get('/admin/akademik/kategoripenilaian/tambah',[App\Http\Controllers\Kategori_penilaianController::class,'create'])->name('data.tambahkatnilai');
Route::post('/admin/akademik/kategoripenilaian/add',[App\Http\Controllers\Kategori_penilaianController::class,'store'])->name('store.katnilai');
Route::get('/admin/akademik/kategoripenilaian/show/{id}',[App\Http\Controllers\Kategori_penilaianController::class,'show'])->name('show.katnilai');
Route::get('/admin/akademik/kategoripenilaian/edit/{id}',[App\Http\Controllers\Kategori_penilaianController::class,'edit'])->name('edit.katnilai');
Route::put('/admin/akademik/kategoripenilaian/update/{id}',[App\Http\Controllers\Kategori_penilaianController::class,'update'])->name('update.katnilai');
Route::delete('/admin/akademik/kategoripenilaian/data/{id}',[App\Http\Controllers\Kategori_penilaianController::class,'destroy'])->name('delete.katnilai');

// Entri Penilaian CRUD
Route::get('/admin/akademik/entripenilaian/index',[App\Http\Controllers\EntrinilaiController::class, 'index'])->name('data.entripenilaian');
Route::get('/admin/akademik/entripenilaian/tambah/{id}',[App\Http\Controllers\EntrinilaiController::class,'create'])->name('data.tambahpenilaian');
Route::post('/admin/akademik/entripenilaian/add',[App\Http\Controllers\EntrinilaiController::class,'entri'])->name('store.entripenilaian');
Route::get('/admin/akademik/entripenilaian/show/{id}',[App\Http\Controllers\EntrinilaiController::class,'show'])->name('show.entripenilaian');
Route::get('/admin/akademik/entripenilaian/edit/{id}',[App\Http\Controllers\EntrinilaiController::class,'edit'])->name('edit.entripenilaian');
Route::put('/admin/akademik/entripenilaian/update/{id}',[App\Http\Controllers\EntrinilaiController::class,'update'])->name('update.entripenilaian');

// Cetak PDF
Route::get('/pdf/cetaknilai/{id}',[CetakController::class,'index'])->name('pdf.index');
Route::get('/pdf/cetaknilai/{id}',[CetakController::class,'cetakpdf'])->name('pdf.nilai');

// Cetak Excel
Route::get('/entrinilai/{id}',[App\Http\Controllers\EntrinilaiController::class,'index'])->name('pdf.index');
Route::get('/Entrinilai/export_excel/{id}',[App\Http\Controllers\EntrinilaiController::class,'export_excel'])->name('excel.nilai');

// Upload Foto
Route::post('/kirimpengaduan',[DataguruController::class,'store'])->name('post.pengaduan');


});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('admin', function () { return view('admin.dashboard'); })->middleware('checkRole:admin');
// Route::get('siswa', function () { return view('siswa'); })->middleware(['checkRole:siswa,admin']);
// Route::get('tu', function () { return view('tu'); })->middleware(['checkRole:tu,admin']);
// Auth::routes();


// Route::get('admin/dashboard',[App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');


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
Route::get('/admin/datamaster/dataguru/tambah',[App\Http\Controllers\DataguruController::class,'create'])->name('data.tambahh');
Route::post('/admin/datamaster/dataguru/add',[App\Http\Controllers\DataguruController::class,'store'])->name('store.guru');
Route::get('/admin/datamaster/dataguru/edit/{id}',[App\Http\Controllers\DataguruController::class,'edit'])->name('edit.guru');
Route::put('/admin/datamaster/dataguru/update/{id}',[App\Http\Controllers\DataguruController::class,'update'])->name('update.guru');
Route::delete('/admin/datamaster/dataguru/data/{id}',[App\Http\Controllers\DataguruController::class,'destroy'])->name('delete.guru');

// Kelas CRUD
Route::get('/admin/datamaster/datakelas/index',[App\Http\Controllers\DatakelasController::class, 'index'])->name('data.kelas');
Route::get('/admin/datamaster/datakelas/tambah',[App\Http\Controllers\DatakelasController::class,'create'])->name('data.tambah');
Route::post('/admin/datamaster/datakelas/add',[App\Http\Controllers\DatakelasController::class,'store'])->name('store.kelas3');
Route::get('/admin/datamaster/datakelas/edit/{id}',[App\Http\Controllers\DatakelasController::class,'edit'])->name('edit.kelas');
Route::put('/admin/datamaster/datakelas/update/{id}',[App\Http\Controllers\DatakelasController::class,'update'])->name('update.kelas3');
Route::delete('/admin/datamaster/datakelas/data/{id}',[App\Http\Controllers\DatakelasController::class,'destroy'])->name('delete.kelas');

