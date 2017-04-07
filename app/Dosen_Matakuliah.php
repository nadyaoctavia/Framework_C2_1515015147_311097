<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah'; 
   protected $fillable = ['dosen_id','matakuliah_id']; 

      //fungsi yang mendefinisakan hubungan balik dengan model dosen_matakuliah dari model dosen
   //eloquent akan mencoba untuk mencocokkan dosen_id dari model dosen ke id pada model dosen_matakuliah. Eloquent menentukan default nama foreign key dengan memeriksa nama fungsi relasi dan suffixing nama fungsi dengan _id.
    public function dosen(){
       	return $this->belongsTo(dosen::class);
       }

    //fungsi yang mendefinisakan hubungan balik dengan model dosen_matakuliah dari model matakuliah
   //eloquent akan mencoba untuk mencocokkan matakuliah_id dari model matakuliah ke id pada model dosen_matakuliah. Eloquent menentukan default nama foreign key dengan memeriksa nama fungsi relasi dan suffixing nama fungsi dengan _id.
   public function matakuliah(){
       	return $this->belongsTo(matakuliah::class);
       }


     // model dosen_matakuliah berelasi dengan model jadwal_matakuliah dengan relasi One to Many.
    // Untuk menentukan hubungan ini, dibuat membuat satu fungsi jadwal_matakuliah() pada model dosen_matakuliah 
    // Fungsi jadwal_matakuliah() harus mempunyai nilai return dari fungsi hasMany() yang ada pada class eloquent
    // pendefinisian ulang pada foreign key (dosen_matakuliah) dengan memasukkan argument tambahan ke fungsi hasMany.
   //  Logikanya : " setiap dosen matakuliah bisa mengikuti banyak jadwal matakuliah "
    public function jadwal_matakuliah(){
    	return $this->hasMany(jadwal_matakuliah::class);
    }

public function listDosenDanMatakuliah()
  {
    $out = [];
    foreach ($this->all() as $dsnMtk){
      $out[$dsnMtk->id] = "{$dsnMtk->dosen->nama}(matakuliah{$dsnMtk->matakuliah->title})";
    }
    return $out;
  }

}
 