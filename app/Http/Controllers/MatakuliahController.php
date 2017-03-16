<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
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
    	$matakuliah = new Matakuliah();
    	$matakuliah->username = 'jon doe';
    	$matakuliah->password = 'doe jon';
    	$matakuliah->save();
    	return "data simpan dgn username ($matakuliah->username) yey";

    }
}
