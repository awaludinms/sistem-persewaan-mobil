<?php

namespace App\Http\Controllers\Peminjaman;

use App\Http\Controllers\Controller;
use App\Http\Requests\Peminjaman\StorePeminjamanMobilRequest;
use App\Http\Requests\Peminjaman\UpdatePeminjamanMobilRequest;
use App\Http\Resources\Peminjaman\PeminjamanMobilResource;
use App\Models\Mobil;
use App\Models\PeminjamanMobil;
use App\Repositories\Peminjaman\PeminjamanRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (Auth::user()->role == "admin")
            return redirect('mobil');

        $mobils = Mobil::where('ready', 'tersedia')
            ->paginate(10);
        
        return view('peminjaman.index', compact('mobils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $id = $request->id;
        $mobil = Mobil::find($id);
        return view('peminjaman.create', compact('id', 'mobil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PeminjamanRepository $repo, StorePeminjamanMobilRequest $request)
    {
        //
        // check ketersediaan
        $not_exists = PeminjamanMobil::where('mobil_id', $request->mobil_id)
            ->where('status_peminjaman', 1)
            ->doesntExist();

        if (! $not_exists) { 
            $available = PeminjamanMobil::where(function($query) use($request){
                $tanggal_mulai = $request->tanggal_mulai;
                $tanggal_selesai = $request->tanggal_selesai;

                $query->whereNotBetween('tanggal_mulai', [$tanggal_mulai, $tanggal_selesai]);
                $query->whereNotBetween('tanggal_selesai', [$tanggal_mulai, $tanggal_selesai]);
            })
            ->where('status_peminjaman', 1)
            ->where('mobil_id', $request->mobile_id);

            if (!$available) {
                return response(['success' => false, 'message' => 'Mobil belum bisa disewa. masih dalam penggunaan']);
            }
        }

        $data = $repo->store($request->validated());
        return new PeminjamanMobilResource($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(PeminjamanMobil $peminjamanMobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeminjamanMobil $peminjamanMobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeminjamanMobilRequest $request, PeminjamanMobil $peminjamanMobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeminjamanMobil $peminjamanMobil)
    {
        //
    }
}
