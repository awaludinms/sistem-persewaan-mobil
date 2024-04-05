<?php
namespace App\Repositories\Peminjaman;
use App\Models\PeminjamanMobil;
use Illuminate\Support\Facades\Auth;

class PeminjamanRepository
{
    public function store(Array $data)
    {

        return PeminjamanMobil::create(array_merge($data, 
            [
                'user_id' => Auth::id(),
                'status_peminjaman' => 1,
            ]));
    }
}