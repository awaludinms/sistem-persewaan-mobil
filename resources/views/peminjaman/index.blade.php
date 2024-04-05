@extends('layouts.app')

@section('page-title', 'Mobil')

@section('button-add')
@endsection

@section('page-title-second')
Daftar Mobil Sewa
@endsection

@section('content-data')
<!-- table  -->
<div class="table-responsive">
    <table class="table text-nowrap mb-0">
        <thead class="table-light">
            <tr>
                <th>Merk</th>
                <th>Model</th>
                <th>Nomot Plat</th>
                <th>Tarif Sewa Perhari</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mobils as $mobil)
            <tr>
                <td class="align-middle">{{ $mobil->merk }}</td>
                <td class="align-middle">{{ $mobil->model }}</td>
                <td class="align-middle">{{ $mobil->nomor_plat }}</td>
                <td class="align-middle">{{ $mobil->tarif_sewa_per_hari }}</td>
                <td><a class="btn btn-success" href="{{ route('peminjaman_mobil.create') }}?id={{ $mobil->id }}">Sewa</a></td>    
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            {{ $mobils->links() }}
        </tfoot>
    </table>
@endsection