<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    public function index()
    {
        // mengambil data dari table barang
        $barang = DB::table('barang')->get();

        // code sweet alert untuk menampilkan pesan jika ingin menghapus data
        $title = 'Peringatan !';
        $text = 'Apakah anda yakin ingin menghapus data ini ?';
        $icon = 'warning';
        confirmDelete($title, $text);

        // mengirim data barang ke view index
        return view('barang.index', compact('barang'));
    }

    // method untuk menampilkan view tambah barang
    public function tambahbarang()
    {
        return view('barang.tambahbarang');
    }

    // method untuk insert data ke table barang contohnya mau menambah data barang
    public function barang(Request $request)
    {
        // insert data ke table barang dan validasi data yang akan diinput
        $request->validate([
            'nama_barang' => 'required|',
            'stok_barang' => 'required|',
            'tanggal_masuk' => 'required|',
            'tanggal_keluar' => 'required|',
            'nama_suplier' => 'required|',
            'telp_suplier' => 'required|',
            'alamat_suplier' => 'required|'
        ]);

        // data yang akan diinput ke table barang atau di tambahkan ke table barang
        DB::table('barang')-> insert([
            'nama_barang' => $request->nama_barang,
            'stok_barang' => $request->stok_barang,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_keluar' => $request->tanggal_keluar,
            'nama_suplier' => $request->nama_suplier,
            'telp_suplier' => $request->telp_suplier,
            'alamat_suplier' => $request->alamat_suplier
        ]);

        // redirect ke halaman barang dan menampilkan pesan sukses
        Alert::success('Success', 'Data Barang Berhasil Ditambahkan');
        return redirect('/barang');
    }

    // method untuk menampilkan detail barang contohnya mau melihat detail barang
    public function show($id){
        $barang = DB::table('barang')->find($id);
        return view('barang.detailbarang', compact('barang'));
    }

    // method untuk edit data barang contohnya mau mengedit data barang
    public function edit($id){
        $barang = DB::table('barang')->find($id);
        return view('barang.editbarang', compact('barang'));
    }

    // code ini untuk update data barang contohnya mau mengupdate data barang yang sudah ada
    public function update(Request $request, $id) {
        // mengvalidasi data yang akan diupdate atau mengubah data
        $request->validate([
            'nama_barang' => 'required|',
            'stok_barang' => 'required|',
            'tanggal_masuk' => 'required|',
            'tanggal_keluar' => 'required|',
            'nama_suplier' => 'required|',
            'telp_suplier' => 'required|',
            'alamat_suplier' => 'required|'
        ]);

        // mengupdate data barang yang sudah ada
        $request = DB::table('barang')->where('id', $id)->update([
            'nama_barang' => $request->nama_barang,
            'stok_barang' => $request->stok_barang,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_keluar' => $request->tanggal_keluar,
            'nama_suplier' => $request->nama_suplier,
            'telp_suplier' => $request->telp_suplier,
            'alamat_suplier' => $request->alamat_suplier
        ]);

        // redirect ke halaman barang dan menampilkan pesan sukses
        Alert::success('Success', 'Data Barang Berhasil Diubah');
        return redirect('/barang');
    }

    // method untuk menghapus data barang contohnya mau menghapus data barang
    public function destroy($id){
        DB::table('barang')->where('id', $id)->delete();
        Alert::success('Success', 'Data Barang Berhasil Dihapus');
        return redirect('/barang');
    }

}
