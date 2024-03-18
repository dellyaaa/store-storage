<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    // fillable digunakan untuk menentukan kolom mana saja yang boleh diisi oleh admin
    protected $fillable = [
        'barang_id',
        'jumlah_barang',
        'pembeli_id',
        'kasir_id',
        'total_harga',
        'pembayaran'
    ];

    // relasi ke tabel barang, pembeli, dan kasir dengan menggunakan metode belongsTo yang berarti transaksi dimiliki oleh barang, pembeli, dan kasir
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id');
    }

    public function kasir()
    {
        return $this->belongsTo(Kasir::class, 'kasir_id');
    }
}
