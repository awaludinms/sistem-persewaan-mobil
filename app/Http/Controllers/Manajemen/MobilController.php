<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manajemen\SearchMobilRequest;
use App\Http\Requests\Manajemen\StoreMobilRequest;
use App\Http\Requests\Manajemen\UpdateMobilRequest;
use App\Http\Resources\Manajemen\MobilResource;
use App\Models\Mobil;
use App\Repositories\Manajemen\MobilRepository;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mobils = Mobil::paginate(10);
        $jumlah_mobil = Mobil::count();
        return view('manajemen.mobil.index', compact('mobils', 'jumlah_mobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('manajemen.mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMobilRequest $request, MobilRepository $repo)
    {
        //
        $data = $repo->store(array_merge($request->validated(), ['ready' => 'tersedia']));
        return new MobilResource($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        //
        return new MobilResource($mobil);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMobilRequest $request, Mobil $mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MobilRepository $repo, Mobil $mobil)
    {
        //
        return $repo->destroy($mobil);
    }

    public function search(MobilRepository $repo, SearchMobilRequest $request)
    {
        // $data = $repo->search($request->validated());
        // return SearchMobilResource::collection($data);
    }

    public function datatables()
    {

    }
}
