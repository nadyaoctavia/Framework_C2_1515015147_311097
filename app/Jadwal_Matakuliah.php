<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
     protected $table = 'jadwal_matakuliah'; 
   protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id']; 

      //fungsi yang mendefinisakan hubungan balik dengan model jadwal_matakuliah dari model mahasiswa
   //eloquent akan mencoba untuk mencocokkan mahasiswa_id dari model dosen ke id pada model jadwal_matakuliah. Eloquent menentukan default nama foreign key dengan memeriksa nama fungsi relasi dan suffixing nama fungsi dengan _id.
     public function mahasiswa(){
       	return $this->belongsTo(mahasiswa::class,'mahasiswa_id');
       }

        //fungsi yang mendefinisakan hubungan balik dengan model jadwal_matakuliah dari model ruangan
   //eloquent akan mencoba untuk mencocokkan dosen_matakuliah dari model ruangan ke id pada model jadwal_matakuliah. Eloquent menentukan default nama foreign key dengan memeriksa nama fungsi relasi dan suffixing nama fungsi dengan _id.
       public function ruangan(){
        return $this->belongsTo(ruangan::class,'ruangan_id');
       }
       
       //fungsi yang mendefinisakan hubungan balik dengan model jadwal_matakuliah dari model dosen_matakuliah
   //eloquent akan mencoba untuk mencocokkan dosen_matakuliah dari model dosen_matakuliah ke id pada model jadwal_matakuliah. Eloquent menentukan default nama foreign key dengan memeriksa nama fungsi relasi dan suffixing nama fungsi dengan _id.
       public function dosen_matakuliah(){
       	return $this->belongsTo(dosen_matakuliah::class,'dosen_matakuliah_id');
       }

   
}
