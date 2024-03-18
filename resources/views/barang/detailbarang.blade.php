@extends('layouts.admin')

@section('judul')
    Detail Barang
@endsection

@section('content')
    <div class="p-3">
        <div class="card" style="width: 24reml;">
            <div class="card-body">
                <h5 class="card-title">Detail Data Barang ke {{ $barang->id }}</h5>
                <h4>Nama Barang : {{ $barang->nama_barang }}</h4>
                <h4 class="card-text">Stok Barang : {{ $barang->stok_barang }}</h4>
                <h4 class="card-text">Tanggal Masuk : {{ $barang->tanggal_masuk }}</h4>
                <h4 class="card-text">Tanggal Keluar : {{ $barang->tanggal_keluar }}</h4>
                <h4 class="card-text">Nama Supplier : {{ $barang->nama_suplier }}</h4>
                <h4 class="card-text">No Telp Supplier : {{ $barang->telp_suplier }}</h4>
                <h4 class="card-text">Alamat Supplier : {{ $barang->alamat_suplier }}</h4>

            </div>
        </div>
        <a href="/barang" class="btn btn-primary my-3">Kembali</a>
    </div>
@endsection
