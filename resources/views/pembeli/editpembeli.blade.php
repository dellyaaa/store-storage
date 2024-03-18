@extends('layouts.admin')

@section('judul', 'Edit Pembeli')

@section('content')
<div class="p-3">
    <h2>Edit Data Pembeli {{$pembeli->id}} </h2>
    <form action="/pembeli/{{ $pembeli->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group p-3">
            <label for="">Nama Pembeli</label>
            <input value="{{ $pembeli->nama_pembeli }}" type="text" name="nama_pembeli" class="form-control" placeholder="Masukan Nama Pembeli" required>
            @error('nama_pembeli')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Gender Pembeli</label>
            <select name="gender_pembeli" class="form-control" required>
                <option value="Laki-laki" {{ $pembeli->gender_pembeli == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $pembeli->gender_pembeli == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('gender_pembeli')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">No telp Pembeli</label>
            <input value="{{ $pembeli->telp_pembeli }}" type="number" name="telp_pembeli" class="form-control" placeholder="Masukan Np telp Pembeli" required>
            @error('telp_pembeli')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">alamat Pembeli</label>
            <input value="{{ $pembeli->alamat_pembeli }}" type="text" name="alamat_pembeli" class="form-control" placeholder="Masukan alamat pembeli" required>
            @error('alamat_pembeli')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <a href="/pembeli" class="btn btn-success my-3">Kembali</a>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
</div>
@endsection
