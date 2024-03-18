@extends('layouts.admin')

@section('judul')
    Detail Kasir
@endsection

@section('content')
    <div class="p-3">
        <div class="card" style="width: 24reml;">
            <div class="card-body">
                <h5 class="card-title">Detail Data Kasir ke {{ $kasir->id }}</h5>
                <h4>Nama Kasir : {{ $kasir->nama_kasir }}</h4>
                <h4>Nomer Kasir : {{ $kasir->nomor_kasir }}</h4>
                <h4>Gender Kasir : {{ $kasir->gender_kasir }}</h4>
                <h4>No Telp Kasir : {{ $kasir->telp_kasir }}</h4>
                <h4>Alamat Kasir : {{ $kasir->alamat_kasir }}</h4>
            </div>
        </div>
        <a href="/kasir" class="btn btn-primary my-3">Kembali</a>
    </div>
@endsection
