<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    protected $table = 'bahan_baku'; // Deklarasi eksplisit nama tabel[cite: 9]
    protected $fillable = ['nama_bahan', 'stok', 'satuan']; // Kolom yang boleh diisi[cite: 9, 10]
}
