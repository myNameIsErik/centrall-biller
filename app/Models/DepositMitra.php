<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositMitra extends Model
{
    use HasFactory;

    protected $table = 'saldo';

    protected $fillable = [
        'user_id',
        'saldo',
        'saldo_sandbox',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function partner()
    {
        return $this->belongsTo(Perusahaan::class, 'user_id', 'id_perusahaan');
    }
}
