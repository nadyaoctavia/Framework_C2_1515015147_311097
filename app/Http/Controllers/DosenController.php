<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
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
    	$dosen = new Dosen();
    	$dosen->username = 'Ahmad Taufik';
    	$dosen->password = 'taufik';
    	$dosen->save();
    	return "data simpan dgn username ($dosen->username)";

    }
}
