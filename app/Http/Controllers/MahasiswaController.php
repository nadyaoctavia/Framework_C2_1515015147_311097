<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
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
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->username = 'Ida Nursanti';
    	$mahasiswa->password = 'doe jon';
    	$mahasiswa->save();
    	return "data simpan dgn username ($mahasiswa->username)";

    }
}
