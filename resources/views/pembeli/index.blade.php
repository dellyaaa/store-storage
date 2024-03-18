@extends('layouts.admin')

@section('judul', 'Data Pembeli')

@section('pembeli')

<div class="p-3">
    <a href="/tambahpembeli" class="btn btn-primary my-3">Tambah pembeli</a>
    <table id="examplel" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Gender Pembeli</th>
                <th scope="col">No Telp Pembeli</th>
                <th scope="col">Alamat Pembeli</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pembeli as $key => $value)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $value->nama_pembeli }}</td>
                    <td>{{ $value->gender_pembeli }}</td>
                    <td>{{ $value->telp_pembeli }}</td>
                    <td>{{ $value->alamat_pembeli }}</td>
                    <td class="mr-3">
                        <a href="/pembeli/{{ $value->id }}" class="btn btn-info">Show</a>
                        <a href="/pembeli/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                        <a href="/pembeli/{{ $value->id }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
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
