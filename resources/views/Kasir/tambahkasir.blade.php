@extends('layouts.admin')

@section('judul', 'Tambah Kasir')

@section('content')
    <form action="/kasir" method="POST">
        @csrf
        <div class="form-group p-3">
            <label for="">Nama kasir</label>
            <input type="text" name="nama_kasir" class="form-control" placeholder="Masukan Nama kasir" required>
            @error('nama_kasir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Nomer kasir</label>
            <input type="number" name="nomor_kasir" class="form-control" placeholder="Masukan Nomer kasir" required>
            @error('nomor_kasir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Gender kasir</label>
            <select name="gender_kasir" class="form-control" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('gender_kasir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">No telp kasir</label>
            <input type="number" name="telp_kasir" class="form-control" placeholder="Masukan Np telp kasir" required>
            @error('telp_kasir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">alamat kasir</label>
            <input type="text" name="alamat_kasir" class="form-control" placeholder="Masukan alamat kasir" required>
            @error('alamat_kasir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        

        <div class="p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
