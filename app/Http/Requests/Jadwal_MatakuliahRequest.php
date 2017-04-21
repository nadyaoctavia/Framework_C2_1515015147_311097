<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class Jadwal_MatakuliahRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			'mahasiswa'=>'required',
			'matakuliah'=>'required',
			'ruangan'=>'required'];
		
			return $validasi;
		}
	








}