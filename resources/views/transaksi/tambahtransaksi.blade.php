@extends('layouts.admin')

@section('judul', 'Tambah Transaksi')

@section('content')
    <form action="/transaksi" method="POST">
        @csrf
        <!-- Input untuk memilih pembeli -->
        <div class="form-group p-3">
            <label for="id_pembeli">Pilih Pembeli:</label>
            <select name="id_pembeli" class="form-control" required>
                <option value="">Pilih Pembeli</option>
                @foreach ($pembeli as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_pembeli }}</option>
                @endforeach
            </select>
            @error('id_pembeli')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Input untuk memilih kasir -->
        <div class="form-group p-3">
            <label for="id_kasir">Pilih Kasir:</label>
            <select name="id_kasir" class="form-control" required>
                <option value="">Pilih Kasir</option>
                @foreach ($kasir as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_kasir }}</option>
                @endforeach
            </select>
            @error('id_kasir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Input untuk memilih barang -->
        <div class="form-group p-3">
            <label for="id_barang">Pilih Barang:</label>
            <select name="id_barang" class="form-control" required>
                <option value="">Pilih Barang</option>
                @foreach ($barang as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
                @endforeach
            </select>
            @error('id_barang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Input untuk jumlah barang -->
        <div class="form-group p-3">
            <label for="jumlah_barang">Jumlah Barang:</label>
            <input type="number" name="jumlah_barang" class="form-control" required>
            @error('jumlah_barang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Input untuk total harga -->
        <div class="form-group p-3">
            <label for="total_harga">Total Harga:</label>
            <input type="number" name="total_harga" class="form-control" required>
            @error('total_harga')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Input untuk pembayaran -->
        <div class="form-group p-3">
            <label for="pembayaran">Pembayaran:</label>
            <input type="text" name="pembayaran" class="form-control" required>
            @error('pembayaran')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
