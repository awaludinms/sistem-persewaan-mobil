<?php

namespace App\Http\Requests\Manajemen;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreMobilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return Auth::user()->role == 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'merk' => 'required',
            'model' => 'required',
            'nomor_plat' => 'required',
            'tarif_sewa_per_hari' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'merk.required' => 'Merk tidak boleh kosong',
            'model.required' => 'Model tidak boleh kosong',
            'nomor_plat.required' => 'Nomor Plat tidak boleh kosong',
            'tarif_sewa_per_hari.required' => 'Tarif sewa per hari tidak boleh kosong',
        ];
    }
}
