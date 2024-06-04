<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PembeliController extends Controller
{
    public function index()
    {
        $pembeli = DB::table('pembeli')->get();

        $title = 'Peringatan !';
        $text = 'Apakah anda yakin ingin menghapus data ini ?';
        $icon = 'warning';
        $showmenu = auth()->user()->isAdmin();
        confirmDelete($title, $text);

        return view('pembeli.index', compact('pembeli', 'showmenu'));
    }

    public function tambahpembeli()
    {
        return view('pembeli.tambahpembeli');
    }

    public function pembeli(Request $request)
    {
        $request->validate([
            'nama_pembeli' => 'required|',
            'gender_pembeli' => 'required|',
            'telp_pembeli' => 'required|',
            'alamat_pembeli' => 'required|'
        ]);

        DB::table('pembeli')-> insert([
            'nama_pembeli' => $request->nama_pembeli,
            'gender_pembeli' => $request->gender_pembeli,
            'telp_pembeli' => $request->telp_pembeli,
            'alamat_pembeli' => $request->alamat_pembeli
        ]);

        Alert::success('Success', 'Data Pembeli Berhasil Ditambahkan');

        return redirect('/pembeli');
    }

    public function show($id){
        $pembeli = DB::table('pembeli')->find($id);
        return view('pembeli.detailpembeli', compact('pembeli'));
    }

    public function edit($id){
        $pembeli = DB::table('pembeli')->find($id);
        return view('pembeli.editpembeli', compact('pembeli'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_pembeli' => 'required|',
            'gender_pembeli' => 'required|',
            'telp_pembeli' => 'required|',
            'alamat_pembeli' => 'required|'
        ]);

        DB::table('pembeli')->where('id', $id)->update([
            'nama_pembeli' => $request->nama_pembeli,
            'gender_pembeli' => $request->gender_pembeli,
            'telp_pembeli' => $request->telp_pembeli,
            'alamat_pembeli' => $request->alamat_pembeli
        ]);

        Alert::success('Success', 'Data Pembeli Berhasil Diubah');
        return redirect('/pembeli');
    }

    public function destroy($id){
        DB::table('pembeli')->where('id', $id)->delete();
        Alert::success('Success', 'Data Pembeli Berhasil Dihapus');
        return redirect('/pembeli');
    }

}
