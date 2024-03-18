@extends('layouts.admin')

@section('judul')
    Edit Kasir
@endsection

@section('content')
    <form action="/kasir/{{ $kasir->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group p-3">
            <label for="">Nama kasir</label>
            <input type="text" name="nama_kasir" class="form-control" value="{{ $kasir->nama_kasir }}" required>
            @error('nama_kasir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Nomer kasir</label>
            <input type="number" name="nomor_kasir" class="form-control" value="{{ $kasir->nomor_kasir }}" required>
            @error('nomor_kasir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">Gender kasir</label>
            <select name="gender_kasir" class="form-control" required>
                <option value="Laki-laki" {{ $kasir->gender_kasir == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $kasir->gender_kasir == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('gender_kasir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">No telp kasir</label>
            <input value="{{ $kasir->telp_kasir }}" type="number" name="telp_kasir" class="form-control" placeholder="Masukan Np telp kasir" required>
            @error('telp_kasir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="">alamat kasir</label>
            <input value="{{ $kasir->alamat_kasir }}" type="text" name="alamat_kasir" class="form-control" placeholder="Masukan alamat kasir" required>
            @error('alamat_kasir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <a href="/kasir" class="btn btn-success my-3">Kembali</a>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
@endsection
