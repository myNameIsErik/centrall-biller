<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'productlist_all';

    protected $fillable = [
        'kode_produk',
        'kode_main',
        'nama_produk',
        'status',
        'biaya_sistem',
        'harga',
        'admin',
        'fee',
        'kategori',
        'supplier',
    ];
}
