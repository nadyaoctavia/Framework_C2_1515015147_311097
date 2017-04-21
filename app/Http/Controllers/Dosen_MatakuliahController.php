<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Dosen_MatakuliahRequest;

use App\Http\Requests;

use App\dosen_matakuliah;
use App\dosen;
use App\matakuliah;
use App\jadwal_matakuliah;

class dosen_matakuliahController extends Controller
{
     protected $informasi = 'Gagal melakukan aksi';
     public function awal()
    {   $semuaDosenMatakuliah= dosen_matakuliah::all();
        return view('dosen_matakuliah.awal', compact('semuaDosenMatakuliah'));
    }
        
    public function tambah()
    {      
            $dosen= new Dosen;
            $matakuliah= new Matakuliah;
            
        return view('dosen_matakuliah.tambah',compact('dosen','matakuliah'));
    }

    public function simpan(Dosen_MatakuliahRequest $input)
    {
        $dosen_matakuliah = new dosen_matakuliah($input->only('dosen_id','matakuliah_id'));
        if ($dosen_matakuliah->save()) $this->informasi = "jadwal Matakuliah berhasil disimpan";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id){
        $dosen_matakuliah = dosen_matakuliah::find($id);
        $dosen= new Dosen;
        $matakuliah= new Matakuliah;
            
        return view('dosen_matakuliah.edit',compact('dosen','matakuliah','dosen_matakuliah'));
          }
    
    public function lihat($id)
    {
        $dosen_matakuliah = dosen_matakuliah::find($id);
         return view('dosen_matakuliah.lihat',compact('dosen_matakuliah'));      
}
    public  function update($id, Dosen_MatakuliahRequest $input){
        $dosen_matakuliah = dosen_matakuliah::find($id);
        
        $dosen_matakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if ($dosen_matakuliah->save())$this->informasi="jadwal Mahasiswa telah di perbaharui";
       
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
}
  public function hapus($id){
    $dosen_matakuliah = dosen_matakuliah::find($id);
        if ($dosen_matakuliah->delete())$this->informasi="jadwal mahasiswa berhasil dihapus";
                   
         return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
 }
}
