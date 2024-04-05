@extends('layouts.app')

@section('page-title', 'Mobil')

@section('page-title-second')
Tambah Mobil
@endsection

@section('content-data')
<!-- Validation Form -->
<div class="card-body">
    <form id="form-data" class="row g-3 needs-validation" novalidate>
    <div class="col-md-6">
        <label for="merk" class="form-label">Merk</label>
        <input type="text" name="merk" class="form-control" id="merk" name="merk" value="" required>
    </div>
    <div class="col-md-6">
        <label for="model" class="form-label">Model</label>
        <input type="text" class="form-control" id="model" value="" name="model" required>
    </div>
    <div class="col-md-6">
        <label for="nomor_plat" class="form-label">Nomot Plat</label>
        <input type="text" class="form-control" id="nomor_plat" name="nomor_plat" required>
    </div>
    <div class="col-md-6">
        <label for="tarif_sewa_per_hari" class="form-label">Tarif Sewa Per Hari</label>
        <input type="text" class="form-control" id="tarif_sewa_per_hari" name="tarif_sewa_per_hari" required>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" onClick="postData('{{ route('mobil.store') }}', event)">Tambah</button>
    </div>
    </form>
</div>
@endsection