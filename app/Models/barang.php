<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    // protected $table digunakan untuk menentukan nama tabel yang akan digunakan oleh model
    protected $table = 'barang';

    // fillable digunakan untuk menentukan kolom mana saja yang boleh diisi oleh admin
    protected $fillable = [
        'nama_barang',
        'stok_barang',
        'tanggal_masuk',
        'tanggal_keluar',
        'nama_suplier',
        'telp_suplier',
        'alamat_suplier'
    ];
}
