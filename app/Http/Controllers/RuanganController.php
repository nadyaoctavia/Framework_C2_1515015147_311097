<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;
class RuanganController extends Controller
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
    	$ruangan = new Ruangan();
    	$ruangan->username = 'Intan';
    	$ruangan->password = 'doe jon';
    	$ruangan->save();
    	return "data simpan dgn username ($ruangan->username) yey";

    }
}
