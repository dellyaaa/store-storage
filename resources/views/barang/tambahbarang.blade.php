@extends('layouts.admin')
@section('judul', 'Tambah Barang')

@section('content')
    <form action="/barang" method="POST">
        @csrf
        <div class="form-group p-3">
            <label for="">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" placeholder="Masukan Nama Barang" required>
            @error('nama_barang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Stok Barang</label>
            <input type="number" name="stok_barang" class="form-control" placeholder="Masukan Stok Barang" required>
            @error('stok_barang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Tanggal Masuk Barang</label>
            <input type="date" name="tanggal_masuk" class="form-control" placeholder="Masukan Tanggal Masuk Barang"
                required>
            @error('tanggal_masuk')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Tanggal Keluar Barang</label>
            <input type="date" name="tanggal_keluar" class="form-control" placeholder="Masukan Tanggal Keluar Barang"
                required>
            @error('tanggal_keluar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Nama Supplier</label>
            <input type="text" name="nama_suplier" class="form-control" placeholder="Masukan Nama Supplier" required>
            @error('nama_suplier')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">No Telp Suplier</label>
            <input type="number" name="telp_suplier" class="form-control" placeholder="Masukan Nomer Supplier" required>
            @error('telp_suplier')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Alamat Supplier</label>
            <input type="text" name="alamat_suplier" class="form-control" placeholder="Masukan Alamat Supplier" required>
            @error('alamat_suplier')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

@endsection
