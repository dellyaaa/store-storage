<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembeli';

    // fillable digunakan untuk menentukan kolom mana saja yang boleh diisi oleh admin
    protected $fillable = [
        'nama_pembeli',
        'gender_pembeli',
        'telp_pembeli',
        'alamat_pembeli'
    ];
}
