@extends('layouts.admin')

@section('judul')
    Detail Pembeli
@endsection

@section('content')
    <div class="p-3">
        <div class="card" style="width: 24reml;">
            <div class="card-body">
                <h5 class="card-title">Detail Data Pembeli ke {{ $pembeli->id }}</h5>
                <h4>Nama Pembeli : {{ $pembeli->nama_pembeli }}</h4>
                <h4>Gender Pembeli : {{ $pembeli->gender_pembeli }}</h4>
                <h4>No Telp Pembeli : {{ $pembeli->telp_pembeli }}</h4>
                <h4>Alamat Pembeli : {{ $pembeli->alamat_pembeli }}</h4>
            </div>
        </div>
        <a href="/pembeli" class="btn btn-primary my-3">Kembali</a>
    </div>
@endsection
