<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnggotaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sertifikat' => 'required',
            'kwitansi' => 'required',
            'luas' => 'required',
            'lokasi' => 'required',
            'status' => 'status'
            // 'sertifikat' => 'required',
            // 'ajb' => 'required',
            // 'lokasi' => 'required',
            // 'kwitansi' => 'required',
            // 'luas' => 'required',
            // 'status' => 'required',
            // 'tgl_jb' => 'required',
            // 'jualdari' => 'required',
            // 'jenis_tanah' => 'required',
            // 'jenis_tanam' => 'required',
            // 'pemilik_tanam' => 'required',
            // 'petani' => 'required',
            // 'diatas' => 'required',
            // 'kemiringan' => 'required'
        ];
    }
}
