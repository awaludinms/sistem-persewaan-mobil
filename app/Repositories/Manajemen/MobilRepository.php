<?php

namespace App\Repositories\Manajemen;
use App\Models\Mobil;

class MobilRepository
{
    public function store(Array $data)
    {
        return Mobil::create($data);
    }

    public function destroy($mobil)
    {
        $mobil->is_deleted = 1;
        $mobil->save();
    }
}