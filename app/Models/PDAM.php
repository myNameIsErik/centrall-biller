<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDAM extends Model
{
    use HasFactory;

    protected $table = 'pdam';

    protected $fillable = [
        'pdam_name',
        'category',
        'brand',
        'name_pt',
        'admin',
        'commission',
        'kode_pdam',
        'buyer_product_status',
        'seller_product_status',
        'desc',
    ];
}
