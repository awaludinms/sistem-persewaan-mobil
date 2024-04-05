<?php

namespace App\Http\Requests\Registrasi;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrasiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
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
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'nomor_sim' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong', 
            'email.unique' => 'Email sudah digunakan', 
            'password.required' => 'Password tidak boleh kosong',
            'password.confirmed' => 'Konfirmasi Password tidak sama',
            'alamat.required' => 'Alamat tidak boleh kosong', 
            'nomor_telepon.required' => 'Nomor Telepon tidak boleh kosong', 
            'nomor_sim.required' => 'Nomor SIM tidak boleh kosong', 
        ];
    }
}
