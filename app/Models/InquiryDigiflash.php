<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InquiryDigiflash extends Model
{
    use HasFactory;

    protected $table = 'inquiry_digiflash';

    protected $fillable = [
        'ref_id',
        'user',
        'status_code',
        'request_data',
        'response_data',
        'tagihan',
        'admin',
        'fee',
        'message',
        'supplier',
        'ip'
    ];
}
