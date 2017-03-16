<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('dosenmatakuliah/tambah','DosenMatakuliahController@tambah');
Route::get('jadwalmatakuliah/tambah','JadwalMatakuliahController@tambah');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('dosen','DosenController@awal');
Route::get('pengguna','PenggunaController@awal');
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('matakuliah','MatakuliahController@awal');
Route::get('dosenmatakuliah','DosenMatakuliahController@awal');
Route::get('jadwalmatakuliah','JadwalMatakuliahController@awal');
Route::get('ruangan','RuanganController@awal');

Route::get('/', function () {
    return view('welcome');

   /* Route::get('hello-world', function () {
    return 'Hello-World';
*/
    /*Route::get('pengguna/{pengguna}'),function($pengguna)
    {
    	return "Hallo world dari pengguna $pengguna";
    */
    });
