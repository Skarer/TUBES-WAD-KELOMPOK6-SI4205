<?php

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
    return view('auth.login');
});

//nilai
Route::get('/nilai', 'ScoreController@index');
Route::get('/nilai/cari', 'ScoreController@cari');

Route::get('/create', 'ScoreController@create');
Route::post('/create/store', 'ScoreController@store');

Route::get('/edit/{score:id}', 'ScoreController@edit');
Route::patch('/edit/{score:id}/update', 'ScoreController@update');

Route::delete('/delete/{score:id}', 'ScoreController@destroy');

//regis dan login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// pelajaran
Route::get('/pelajaran', 'CourseController@index');
Route::get('pelajaran/cari', 'CourseController@cari');

Route::get('/pelajaran/create', 'CourseController@create');
Route::post('/pelajaran/create/store', 'CourseController@store');

Route::get('/pelajaran/edit/{course:id}', 'CourseController@edit');
Route::patch('/pelajaran/edit/{course:id}/update', 'CourseController@update');

Route::delete('/pelajaran/delete/{course:id}', 'CourseController@destroy');

//absen
Route::get('/absen', 'AttedanceController@index');
Route::get('/absen/cari', 'AttedanceController@cari');

Route::get('/absen/create', 'AttedanceController@create');
Route::post('/absen/create/store', 'AttedanceController@store');

Route::get('/absen/edit/{attedance:id}', 'AttedanceController@edit');
Route::patch('/absen/edit/{attedance:id}/update', 'AttedanceController@update');

Route::delete('/absen/delete/{attedance:id}', 'AttedanceController@destroy');

//kegiatan
Route::get('/homeguru', 'EventController@index');

Route::get('/homeguru/create','EventController@create');
Route::post('/homeguru/create/store', 'EventController@store');

Route::get('/homeguru/edit/{event:id}', 'EventController@edit');
Route::patch('/homeguru/edit/{event:id}/update', 'EventController@update');

Route::delete('/homeguru/delete/{event:id}', 'EventController@destroy');

//siswa
Route::get('/absensiswa', 'AbsensiController@index');
Route::get('/absensiswa/cari', 'AbsensiController@cari');

Route::get('/homesiswa', 'KegiatanController@index');

Route::get('/nilaisiswa', 'NilaiController@index');
Route::get('/nilaisiswa/cari', 'NilaiController@cari');

Route::get('/pelajaransiswa', 'PelajaranController@index');
Route::get('/pelajaransiswa/cari', 'PelajaranController@cari');

//profil
Route::group(['middleware' => 'auth'], function () {

Route::get('profile', 'ProfilsiswaController@edit')->name('profile.edit');

Route::get('profile/guru', 'ProfilguruController@edit');

Route::post('profile', 'ProfilsiswaController@update')->name('profile.update');

});
