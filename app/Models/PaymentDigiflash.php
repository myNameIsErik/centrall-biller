<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDigiflash extends Model
{
    use HasFactory;

    protected $table = 'pay_digiflash';

    protected $fillable = [
        'ref_id',
        'user',
        'status_code',
        'request_data',
        'response_data',
        'message',
        'tagihan',
        'admin',
        'fee',
        'reference_code',
        'ip'
    ];
}
