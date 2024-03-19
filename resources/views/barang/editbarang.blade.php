@extends('layouts.admin')

@section('judul')

@endsection

@section('content')
<div class="p-3">
    <h2>Edit Data Barang {{$barang->id}} </h2>
        <form action="/barang/{{$barang->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group p-3">
            <label for="">Nama Barang</label>
            <input value="{{ $barang->nama_barang }}" type="text" name="nama_barang" class="form-control" placeholder="Masukan Nama Barang" required>
            @error('nama_barang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Stok Barang</label>
            <input value="{{ $barang->stok_barang }}" type="number" name="stok_barang" class="form-control" placeholder="Masukan Stok Barang" required>
            @error('stok_barang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Tanggal Masuk Barang</label>
            <input value="{{ $barang->tanggal_masuk }}" type="date" name="tanggal_masuk" class="form-control" placeholder="Masukan Tanggal Masuk Barang" required>
            @error('tanggal_masuk')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Tanggal Keluar Barang</label>
            <input value="{{ $barang->tanggal_keluar }}" type="date" name="tanggal_keluar" class="form-control" placeholder="Masukan Tanggal Keluar Barang" required>
            @error('tanggal_keluar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Nama Supplier</label>
            <input value="{{ $barang->nama_suplier }}" type="text" name="nama_suplier" class="form-control" placeholder="Masukan Nama Supplier" required>
            @error('nama_suplier')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">No Telp Suplier</label>
            <input value="{{ $barang->telp_suplier }}" type="number" name="telp_suplier" class="form-control" placeholder="Masukan Nomer Supplier" required>
            @error('telp_suplier')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Alamat Supplier</label>
            <input value="{{ $barang->alamat_suplier }}" type="text" name="alamat_suplier" class="form-control" placeholder="Masukan Alamat Supplier" required>
            @error('alamat_suplier')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
            <a href="/barang" class="btn btn-success my-3">Kembali</a>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
</div>


@endsection
