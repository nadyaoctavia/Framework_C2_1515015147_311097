<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
   protected $table = 'dosen'; 
   protected $guarded = ['id']; 

   //fungsi yang mendefinisakan hubungan balik dengan model pengguna dari model dosen
   //eloquent akan mencoba untuk mencocokkan pengguna_id dari model dosen ke id pada model pengguna. Eloquent menentukan default nama foreign key dengan memeriksa nama fungsi relasi dan suffixing nama fungsi dengan _id.
   public function Pengguna(){
       	return $this->belongsTo(Pengguna::class);
       }

    // model dosen berelasi dengan model dosen_matakuliah dengan relasi One to Many.
    // Untuk menentukan hubungan ini, dibuat membuat satu fungsi dosen_matakuliah() pada model dosen 
    // Fungsi dosen_matakuliah() harus mempunyai nilai return dari fungsi hasMany() yang ada pada class eloquent
    // pendefinisian ulang pada foreign key (dosen_id) dengan memasukkan argument tambahan ke fungsi hasMany.
    // Logikanya : " setiap dosen memilik satu pengguna_id "
    // 
   public function dosen_matakuliah(){
       	return $this->hasMany(dosen_matakuliah::class,'dosen_id');
       }

         public function getUsernameAttribute(){
    return $this->pengguna->username;
  }

public function listDosenDanNIP()
  {
    $out = [];
    foreach ($this->all() as $dsn){
      $out[$dsn->id] = "{$dsn->nama}({$dsn->nip})";
    } 
    return $out;  
  }
  
}