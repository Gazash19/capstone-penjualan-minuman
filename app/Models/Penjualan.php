<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['menu_id', 'jumlah_beli', 'total_harga', 'tanggal_transaksi'];
}
