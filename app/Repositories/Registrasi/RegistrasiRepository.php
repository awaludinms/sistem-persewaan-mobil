<?php
namespace App\Repositories\Registrasi;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\DB;

class RegistrasiRepository
{
    public function register(Array $data)
    {
        return User::create($data);
    }
}