@extends('layouts.admin')

@section('judul', 'Tambah Pembeli')

@section('content')
    <form action="/pembeli" method="POST">
        @csrf
        <div class="form-group p-3">
            <label for="">Nama Pembeli</label>
            <input type="text" name="nama_pembeli" class="form-control" placeholder="Masukan Nama Pembeli" required>
            @error('nama_pembeli')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Gender Pembeli</label>
            <select name="gender_pembeli" class="form-control" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('gender_pembeli')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">No telp Pembeli</label>
            <input type="number" name="telp_pembeli" class="form-control" placeholder="Masukan Np telp Pembeli" required>
            @error('telp_pembeli')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">alamat Pembeli</label>
            <input type="text" name="alamat_pembeli" class="form-control" placeholder="Masukan alamat pembeli" required>
            @error('alamat_pembeli')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
