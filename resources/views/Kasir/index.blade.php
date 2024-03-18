@extends('layouts.admin')

@section('judul', 'kasir')

@section('kasir')
<div class="p-3">
    <a href="/tambahkasir" class="btn btn-primary my-3">Tambah Kasir</a>
    <table id="examplel" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kasir</th>
                <th scope="col">Nomer Kasir</th>
                <th scope="col">Gender Kasir</th>
                <th scope="col">No Telp Kasir</th>
                <th scope="col">Alamat Kasir</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kasir as $key => $value)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th> <!-- corrected id attribute -->
                    <td>{{ $value->nama_kasir }}</td>
                    <td>{{ $value->nomor_kasir }}</td>
                    <td>{{ $value->gender_kasir }}</td>
                    <td>{{ $value->telp_kasir }}</td>
                    <td>{{ $value->alamat_kasir }}</td>
                    <td class="mr-3">
                        <a href="/kasir/{{ $value->id }}" class="btn btn-info">Show</a>
                        <a href="/kasir/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                        <a href="/kasir/{{ $value->id }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
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

<link rel='stylesheet' type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"
