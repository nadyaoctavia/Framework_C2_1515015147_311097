<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Jadwal_MatakuliahRequest;
use App\Http\Requests;

use App\jadwal_matakuliah;
use App\mahasiswa;
use App\dosen_matakuliah;
use App\ruangan;

class jadwal_matakuliahController extends Controller
{   protected $informasi = 'Gagal melakukan aksi';
     public function awal()
    {   $semuaJadwalMatakuliah= jadwal_matakuliah::all();
        return view('jadwal_matakuliah.awal', compact('semuaJadwalMatakuliah'));
    }
        
    public function tambah()
    {       $mahasiswa= new Mahasiswa;
            $ruangan= new Ruangan;
            $dosen_matakuliah= new dosen_matakuliah;
        return view('jadwal_matakuliah.tambah',compact('mahasiswa','ruangan','dosen_matakuliah'));
    }

    public function simpan(Jadwal_MatakuliahRequest $input)
    {
        $jadwal_matakuliah = new jadwal_matakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if ($jadwal_matakuliah->save()) $this->informasi = "jadwal Matakuliah berhasil disimpan";
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id){
        $jadwalmatakuliah = jadwal_matakuliah::find($id);
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new dosen_matakuliah;
        return view('jadwal_matakuliah.edit',compact('mahasiswa','ruangan','dosen_matakuliah','jadwalmatakuliah'));


          }
    
    public function lihat($id)
    {
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
         return view('jadwal_matakuliah.lihat',compact('jadwal_matakuliah'));      
}
    public  function update($id, Jadwal_MatakuliahRequest $input){
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        
        $jadwal_matakuliah->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if ($jadwal_matakuliah->save())$this->informasi="jadwal Mahasiswa telah di perbaharui";
       
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
}
  public function hapus($id){
    $jadwal_matakuliah = jadwal_matakuliah::find($id);
        if ($jadwal_matakuliah->delete())$this->informasi="jadwal mahasiswa berhasil dihapus";
                   
         return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
 }
}
