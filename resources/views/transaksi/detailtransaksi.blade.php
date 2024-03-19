@extends('layouts.admin')

@section('judul')
    Detail Transaksi
@endsection

@section('content')
    <div class="p-3">
        <div class="card" style="width: 24reml;">
            <div class="card-body">
                <h5 class="card-title">Detail Data Transaksi ke {{ $transaksi->id }}</h5>
                <h4>Nama Pembeli : {{ $transaksi->pembeli->nama_pembeli }}</h4>
                <h4>Nama Kasir : {{ $transaksi->kasir->nama_kasir }}</h4>
                <h4>Nama Barang : {{ $transaksi->barang->nama_barang }}</h4>
                <h4>Jumlah Barang : {{ $transaksi->jumlah_barang }}</h4>
                <h4>Total Harga : {{ $transaksi->total_harga }}</h4>
                <h4>Pembayaran : {{ $transaksi->pembayaran }}</h4>
            </div>
        </div>
        <a href="/transaksi" class="btn btn-primary my-3">Kembali</a>
    </div>
@endsection
