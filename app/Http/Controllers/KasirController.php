<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KasirController extends Controller
{
    public function index()
    {
        $kasir = DB::table('kasir')->get();

        $title = 'Peringatan !';
        $text = 'Apakah anda yakin ingin menghapus data ini ?';
        $icon = 'warning';
        confirmDelete($title, $text);
        return view('kasir.index', compact('kasir'));
    }

    public function tambahkasir()
    {
        return view('kasir.tambahkasir');
    }

    public function kasir(Request $request)
    {
        $request->validate([
            'nama_kasir' => 'required|',
            'nomor_kasir' => 'required|',
            'gender_kasir' => 'required|',
            'telp_kasir' => 'required|',
            'alamat_kasir' => 'required|'
        ]);

        DB::table('kasir')-> insert([
            'nama_kasir' => $request->nama_kasir,
            'nomor_kasir' => $request->nomor_kasir,
            'gender_kasir' => $request->gender_kasir,
            'telp_kasir' => $request->telp_kasir,
            'alamat_kasir' => $request->alamat_kasir
        ]);

        Alert::success('Success', 'Data Kasir Berhasil Ditambahkan');

        return redirect('/kasir');
    }

    public function show($id){
        $kasir = DB::table('kasir')->find($id);
        return view('kasir.detailkasir', compact('kasir'));
    }

    public function edit($id){
        $kasir = DB::table('kasir')->find($id);
        return view('kasir.editkasir', compact('kasir'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_kasir' => 'required|',
            'nomor_kasir' => 'required|',
            'gender_kasir' => 'required|',
            'telp_kasir' => 'required|',
            'alamat_kasir' => 'required|'
        ]);

        $request = DB::table('kasir')->where('id', $id)->update([
            'nama_kasir' => $request->nama_kasir,
            'nomor_kasir' => $request->nomor_kasir,
            'gender_kasir' => $request->gender_kasir,
            'telp_kasir' => $request->telp_kasir,
            'alamat_kasir' => $request->alamat_kasir
        ]);

        Alert::success('Success', 'Data Kasir Berhasil Diubah');

        return redirect('/kasir');
    }

    public function destroy($id){
        DB::table('kasir')->where('id', $id)->delete();

        Alert::success('Success', 'Data Kasir Berhasil Dihapus');

        return redirect('/kasir');
    }

}
