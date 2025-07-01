<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductList extends Model
{
    use HasFactory;

    protected $table = 'productslist';

    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'nama_supplier',
        'kategori',
    ];
}
