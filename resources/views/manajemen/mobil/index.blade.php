@extends('layouts.app')

@section('page-title', 'Mobil')

@section('button-add')
<a href="{{ route('mobil.create') }}" class="btn btn-white" >Tambah Mobil</a>
@endsection

@section('page-title-second')
Daftar Mobil
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
            </tr>
        </thead>
        <tbody>
            @foreach($mobils as $mobil)
            <tr>
                <td class="align-middle">{{ $mobil->merk }}</td>
                <td class="align-middle">{{ $mobil->model }}</td>
                <td class="align-middle">{{ $mobil->nomor_plat }}</td>
                <td class="align-middle">{{ $mobil->tarif_sewa_per_hari }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">{{ $mobils->links() }}</td>        
            </tr>
        </tfoot>
    </table>
@endsection

@section('form')

@endsection