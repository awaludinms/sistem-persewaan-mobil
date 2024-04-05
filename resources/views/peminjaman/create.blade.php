@extends('layouts.app')

@section('page-title', 'Sewa Mobil')

@section('page-title-second')
Tambah Sewa Mobil
@endsection

@section('content-data')
<!-- Validation Form -->
<div class="card-body">
    <form id="form-data" class="row g-3 needs-validation" novalidate>
    <div class="col-md-6">
        <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
        <input type="date" name="tanggal_mulai" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="" required>
    </div>
    <div class="col-md-6">
        <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
        <input type="date" class="form-control" id="tanggal_selesai" value="" name="tanggal_selesai" required>
    </div>
    <div class="col-md-6">
        <label for="merk" class="form-label">Merk</label>
        <input type="text" class="form-control" id="merk" name="merk" value="{{ $mobil->merk }}" required>
    </div>
    <div clasps="col-md-6">
        <label for="model" class="form-label">Model</label>
        <input type="text" class="form-control" id="model" name="model" value="{{ $mobil->model }}">
    </div>
    <div class="col-md-6">
        <label for="nomor_plat" class="form-label">Nomot Plat</label>
        <input type="text" class="form-control" id="nomor_plat" name="nomor_plat" value="{{ $mobil->nomor_plat }}" required>
    </div>
    <div class="col-md-6">
        <label for="tarif_sewa_per_hari" class="form-label">Tarif Sewa Per Hari</label>
        <input type="text" class="form-control" id="tarif_sewa_per_hari" name="tarif_sewa_per_hari" value="{{ $mobil->tarif_sewa_per_hari }}">
    </div>
    <input type="hidden" name="mobil_id" value="{{ $id }}">
    <div class="col-12">
        <button class="btn btn-primary" onClick="postData('{{ route('peminjaman_mobil.store') }}', event)">Sewa</button>
    </div>
    </form>
</div>
@endsection