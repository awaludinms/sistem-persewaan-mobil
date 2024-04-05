<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanMobil extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal_mulai', 'tanggal_selesai', 
        'mobil_id', 'user_id', 'status_peminjaman', 
        'jumlah_biaya_sewa', 'durasi_sewa', 'tanggal_dikembalikan'];
}
