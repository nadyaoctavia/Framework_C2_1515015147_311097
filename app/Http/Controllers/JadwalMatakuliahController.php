<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\JadwalMatakuliah;

class JadwalMatakuliahController extends Controller
{
    public function awal()
    {
    	return "Heloow";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$jadwalmatakuliah = new JadwalMatakuliah();
    	$jadwalmatakuliah->username = 'Andri Ikwan';
    	$jadwalmatakuliah->password = 'doe jon';
    	$jadwalmatakuliah->save();
    	return "data simpan dgn username ($jadwalmatakuliah->username)";

    }
}
