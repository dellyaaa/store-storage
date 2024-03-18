<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    use HasFactory;

    protected $table = 'kasir';

    // fillable digunakan untuk menentukan kolom mana saja yang boleh diisi oleh admin
    protected $fillable = [
        'nama_kasir',
        'nomer_kasir',
        'gender_kasir',
        'telp_kasir',
        'alamat_kasir'
    ];
}
