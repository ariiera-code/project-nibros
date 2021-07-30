<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
	return view('v_home');
});

Route::get('/form', [MahasiswaController::class, 'form']);
Route::post('/form', [MahasiswaController::class, 'prosesForm']);
Route::get('/file-upload', [FileUploadController::class, 'fileUpload']);
Route::post('/file-upload', [FileUploadController::class, 'prosesUpload']);

Route::view('/about', 'v_about', [
	'nama' => 'Nibros Ari Wibowo',
	'jenis_kelamin' => 'Laki-laki',
	'ttl' => 'Klaten, 28 Juni 2000',
	'hobi' => 'Futsal',
	'moto_hidup' => 'Segala hal pasti ada kapasitasnya',
	'makanan_fav' => 'Sate Kambing',
	'minuman_fav' => 'Jus Durian',
]);

Route::view('/mahasiswa', 'v_mahasiswa', [
	'nama' => 'Nibros Ari Wibowo',
	'nim' => '3.34.19.2.18',
	'semester' => '4',
	'mk' => 'Pemrograman Web Berbasis Framework.',
	'dosen' => 'Aisyatul Karima , S.Kom., M.Cs.',
]);

Route::view('/admin/dosen', 'admin.v_dosen');
Route::view('/admin/karyawan', 'admin.v_karyawan');
Route::view('/admin/mahasiswa', 'admin.v_mahasiswa');

Route::get('/dataku', function () {
	$data = [
		['nama_mahasiswa' => 'Nibros Ari W.', 'alamat' => 'Klaten', 'nim' => '33419218', 'semester' => '4', 'tahun_ajaran' => '2020/2021'],
		['nama_mahasiswa' => 'Tegar Mahardika W.', 'alamat' => 'Cilacap', 'nim' => '33419223', 'semester' => '4', 'tahun_ajaran' => '2020/2021'],
		['nama_mahasiswa' => 'Gaudentio Shandie M.', 'alamat' => 'Ungaran', 'nim' => '33419211', 'semester' => '4', 'tahun_ajaran' => '2020/2021'],
	];
	array_multisort(array_map(function ($element) {
		return $element['nim'];
	}, $data), SORT_ASC, $data);

	return view('v_dataku', ['data' => $data]);
});


Route::get('/dataku/{nim?}', function ($nim) {

	if ($nim == "33419211") {
		echo "NIM = 3.34.19.2.11<br>";
		echo "Nama = Gaudentio Shandie Mikolus<br>";
		echo "Alamat = Ungaran<br>";
		echo "Semester = 4<br>";
		echo "Tahun Ajaran = 2020/2021<br>";
	} elseif ($nim == "33419218") {
		echo "NIM = 3.34.19.2.18<br>";
		echo "Nama = Nibros Ari Wibowo<br>";
		echo "Alamat = Klaten<br>";
		echo "Semester = 4<br>";
		echo "Tahun Ajaran = 2020/2021<br>";
	} elseif ($nim == "33419223") {
		echo "NIM = 3.34.19.2.23<br>";
		echo "Nama = Tegar Mahardika<br>";
		echo "Alamat = Cilacap<br>";
		echo "Semester = 4<br>";
		echo "Tahun Ajaran = 2020/2021<br>";
	} else {
		echo "NIM = $nim<br>";
		echo "Tidak ditemukan atau nim belum terdaftar";
	}
})->where('id', '[0-9][.]+');

Route::get(
	'/mahasiswa/{nama_mahasiswa}/{umur}/{kota_asal}',
	function ($nama, $umur, $kota_asal) {
		return 'Daftar Mahasiswa<br>Nama: ' . $nama . '<br> Umur: ' . $umur . '<br>Kota Asal: ' . $kota_asal;
	}
);

Route::get('/mahasiswa', function () {
	$nama = 'Nibros Ari Wibowo';
	$nilai = 0;
	return view('mahasiswa', compact('nama', 'nilai'));
});


Route::get('/mahasiswa', function () {
	$nama = 'Nibros Ari Wibowo';
	$nilai = 0;
	return view('mahasiswa', compact('nama', 'nilai'));
});

Route::get('/mahasiswa', function () {
	$nama = 'Nibros Ari Wibowo';
	$nilai = [80, 64, 30, 76, 95];
	return view('mahasiswa', compact('nama', 'nilai'));
});

Route::get('mahasiswa', function () {
	$arrMahasiswa = ["Risa Lestari", "Rudi Hermawan", "Bambang Kusumo", "Lisa Permata"];
	return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
});
Route::get('dosen', function () {
	$arrDosen = ["Maya Fitrianti, M.M.", "Prof. Silvia Nst, M.Farm.", "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom."];
	return view('dosen')->with('dosen', $arrDosen);
});
Route::get('gallery', function () {
	return view('gallery');
});

Route::get('/nama', [MahasiswaController::class, 'nama']);

Route::get('/mhs', [MahasiswaController::class, 'mhs']);

Route::get('/dsn', [MahasiswaController::class, 'dsn']);

Route::get('/glr', [MahasiswaController::class, 'glr']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');