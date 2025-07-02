<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_supplier';

    protected $fillable = [
        'kode_supplier',
        'nama_supplier',
        'url',
    ];
}
