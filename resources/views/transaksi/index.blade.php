@extends('layouts.admin')

@section('judul', 'Transaksi')

@section('transaksi')
    <div class="p-3">
        <a href="/tambahtransaksi" class="btn btn-primary">Tambah Transaksi</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pembeli</th>
                    <th scope="col">Nama Kasir</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transaksi as $key => $value)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $value->pembeli->nama_pembeli }}</td>
                        <td>{{ $value->kasir->nama_kasir }}</td>
                        <td>{{ $value->barang->nama_barang }}</td>
                        <td>{{ $value->jumlah_barang }}</td>
                        <td>{{ $value->total_harga }}</td>
                        <td class="mr-3">
                            <a href="/transaksi/{{ $value->id }}" class="btn btn-info">Show</a>
                            <a href="/transaksi/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                            <a href="/transaksi/{{ $value->id }}" class="btn btn-danger"
                                data-confirm-delete="true">Delete</a>
                        </td>
                    </tr>
            </tbody>
        @empty
            <tr colspan="6">
                <td>No Data</td>
            </tr>
            @endforelse
        </table>
    </div>
@endsection
