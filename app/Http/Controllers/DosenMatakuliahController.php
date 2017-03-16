<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DosenMatakuliah;

class DosenMatakuliahController extends Controller
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
    	$dosenmatakuliah = new DosenMatakuliah();
    	$dosenmatakuliah->username = 'Kusuma';
    	$dosenmatakuliah->password = 'doe jon';
    	$dosenmatakuliah->save();
    	return "data simpan dgn username ($dosenmatakuliah->username)";

    }
}
