<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{protected $table = 'mahasiswa'; 
       protected  $guarded = ['id']; 

      //fungsi yang mendefinisakan hubungan balik dengan model pengguna dari model mahasiswa
   //eloquent akan mencoba untuk mencocokkan pengguna_id dari model mahasiswa ke id pada model pengguna. Eloquent menentukan default nama foreign key dengan memeriksa nama fungsi relasi dan suffixing nama fungsi dengan _id.
       public function Pengguna(){
       	return $this->belongsTo(Pengguna::class);
       }

     // model mahasiswa berelasi dengan model jadwal_matakuliah dengan relasi One to Many.
    // Untuk menentukan hubungan ini, dibuat membuat satu fungsi jadwal_matakuliah() pada model mahasiswa 
    // Fungsi jadwal_matakuliah() harus mempunyai nilai return dari fungsi hasMany() yang ada pada class eloquent
    // pendefinisian ulang pada foreign key (mahasiswa_id) dengan memasukkan argument tambahan ke fungsi hasMany.
  //  Logikanya : " setiap mahasiswa bisa mengikuti oleh banyak jadwal matakuliah "
       public function jadwal_matakuliah(){
       	return $this->hasMany(jadwal_matakuliah::class,'mahasiswa_id');
       } 
public function listMahasiswaDanNim()
  {
    $out = [];
    foreach ($this->all() as $mhs){
      $out[$mhs->id] = "{$mhs->nama}({$mhs->nim})";

    }
    return $out;
  }
  
  public function getUsernameAttribute(){
    return $this->pengguna->username;
  }

}
