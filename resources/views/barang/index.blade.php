@extends('layouts.admin')

@section('judul')
    Barang Buah
@endsection

<!--Page Heading-->

@section('tabel')
    <div class="p-3">
        <a href="/tambahbarang" class="btn btn-primary my-3">Tambah Barang</a>
        <table id="examplel" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Buah</th>
                    <th scope="col">Stok Buah</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Keluar</th>
                    <th scope="col">Nama Suplier</th>
                    <th scope="col">Telpon Suplier</th>
                    <th scope="col">Alamat Suplier</th>
                    <th scope="col">Aksi</th>
              </tr>
            </thead>

            <tbody>
                @forelse ($barang as $key => $value)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $value->nama_barang }}</td>
                        <td>{{ $value->stok_barang }}</td>
                        <td>{{ $value->tanggal_masuk }}</td>
                        <td>{{ $value->tanggal_keluar }}</td>
                        <td>{{ $value->nama_suplier }}</td>
                        <td>{{ $value->telp_suplier }}</td>
                        <td>{{ $value->alamat_suplier }}</td>
                        <td class="mr-3">
                            <a href="/barang/{{ $value->id }}" class="btn btn-info">Show</a>
                            <a href="/barang/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                            <a href="/barang/{{ $value->id }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr colspan="6">
                        <td>No Data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

<link rel='stylesheet' type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"