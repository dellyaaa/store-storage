<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Pembeli;
use App\Models\Kasir;
use App\Models\Barang;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    // method untuk menampilkan view index
    public function index()
    {
        // code sweet alert untuk menampilkan pesan jika ingin menghapus data
        $title = 'Peringatan !';
        $text = 'Apakah anda yakin ingin menghapus data ini ?';
        $icon = 'warning';
        confirmDelete($title, $text);
        
        // mengambil data dari table transaksi agar bisa ditampilkan di view index
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    // method untuk menampilkan view tambah transaksi
    public function tambahtransaksi()
    {
        // mengambil data dari table pembeli, kasir, dan barang agar bisa ditampilkan di view tambahtransaksi
        $pembeli = Pembeli::all();
        $kasir = Kasir::all();
        $barang = Barang::all();
        return view('transaksi.tambahtransaksi', compact('pembeli', 'kasir', 'barang'));
    }

    // method untuk insert data ke table transaksi contohnya mau menambah data transaksi
    public function transaksi(Request $request)
    {
        // insert data ke table transaksi dan validasi data yang akan diinput dan data yang di input mengambil dari database pembeli, kasir, dan barang
        // selain itu juga mengvalidasi data yang akan diinput
        $request->validate([
            'id_barang' => 'required',
            'jumlah_barang' => 'required',
            'id_pembeli' => 'required',
            'id_kasir' => 'required',
            'total_harga' => 'required',
            'pembayaran' => 'required'
        ]);

        // mirip seperti code  DB::table('transaksik')-> insert tapi disini menggunakan model Transaksi dan create untuk menambah data ke table transaksi
        Transaksi::create([
            'barang_id' => $request->id_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'pembeli_id' => $request->id_pembeli,
            'kasir_id' => $request->id_kasir,
            'total_harga' => $request->total_harga,
            'pembayaran' => $request->pembayaran
        ]);

        // redirect ke page transaksi dan menampilkan pesan sukses
        Alert::success('Success', 'Data Transaksi Berhasil Ditambahkan');
        return redirect('/transaksi');
    }

    // method untuk menampilkan view detail transaksi
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.detailtransaksi', compact('transaksi'));
    }

    // method untuk menampilkan view edit transaksi
    public function edit($id)
    {
        // mengambil data dari table transaksi berdasarkan id yang dipilih agar bisa ditampilkan di view edittransaksi.
        // sebagai contoh disini mengambil data dari table pembeli, kasir, dan barang agar bisa ditampilkan di view edittransaksi
        $transaksi = Transaksi::findOrFail($id);
        $pembeli = Pembeli::all();
        $kasir = Kasir::all();
        $barang = Barang::all();
        return view('transaksi.edittransaksi', compact('transaksi', 'pembeli', 'kasir', 'barang'));
    }

    // method untuk update data transaksi contohnya mau mengupdate data transaksi yang sudah ada
    public function update(Request $request, $id)
    {
        // mengvalidasi data yang akan diupdate atau mengubah data dan data yang di input mengambil dari database pembeli, kasir, dan barang
        $request->validate([
            'id_barang' => 'required',
            'jumlah_barang' => 'required',
            'id_pembeli' => 'required',
            'id_kasir' => 'required',
            'total_harga' => 'required',
            'pembayaran' => 'required'
        ]);

        // mengupdate data transaksi yang sudah ada dan data yang di input mengambil dari database pembeli, kasir, dan barang
        $transaksi = Transaksi::findOrFail($id);
        // mirip seperti code  DB::table('transaksi')->where('id', $id)->update tapi disini menggunakan model Transaksi dan update untuk mengubah data di table transaksi
        $transaksi->update($request->all());

        // redirect ke page transaksi dan menampilkan pesan sukses
        Alert::success('Success', 'Data Transaksi Berhasil Diubah');
        return redirect('/transaksi');
    }

    // method untuk menghapus data transaksi contohnya mau menghapus data transaksi
    public function destroy($id)
    {
        Transaksi::destroy($id);
        Alert::success('Success', 'Data Transaksi Berhasil Dihapus');
        return redirect('/transaksi');
    }
}
