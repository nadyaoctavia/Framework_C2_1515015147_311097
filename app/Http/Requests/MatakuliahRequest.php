<?php
namespace App\Http\Requests;

use App\Http\Requests\Requests;

class MatakuliahRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $validasi = [
            'title'=>'required',
            'keterangan'=>'required'];
            return $validasi;
        }
    








}