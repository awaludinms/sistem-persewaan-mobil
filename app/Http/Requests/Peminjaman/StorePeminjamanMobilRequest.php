<?php

namespace App\Http\Requests\Peminjaman;

use App\Models\Mobil;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePeminjamanMobilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user()->role == 'pengguna';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // // cek ketersediaan
        // $sedia = Mobil::where('id', $this->mobil_id)
        //     ->where('ready', 'tersedia')
        //     ->exists();

        // if (! $sedia) {
        //     return [
        //         'ketersedian' => 'required'
        //     ];
        // }

        return [
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'mobil_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'ketersedian.required' => 'Mobil tidak tersedia',
            'tanggal_mulai.required' => 'Tanggal Mulai tidak boleh kosong', 
            'tanggal_selesai.required' => 'Tanggal Selesai tidak boleh kosong',
            // 'mobil_id.required' => 'Pilihan Mobil tidak boleh kosong', 
        ];
    }
}
