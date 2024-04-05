<?php

namespace App\Http\Controllers\Registrasi;

use App\Http\Controllers\Controller;
use App\Http\Requests\Registrasi\StoreRegistrasiRequest;
use App\Http\Resources\Registrasi\RegistrasiResource;
use App\Repositories\Registrasi\RegistrasiRepository;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    //
    public function index()
    {
        return view('registrasi.index');
    }

    /**
     * Simpan registrasi pengguna
     * 
     * @
     */
    public function register(StoreRegistrasiRequest $request, RegistrasiRepository $repo)
    {
        $data = $repo->register($request->validated());
        return new RegistrasiResource($data);
    }
}
