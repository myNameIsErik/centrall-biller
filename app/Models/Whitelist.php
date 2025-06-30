<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whitelist extends Model
{
    use HasFactory;

    protected $table = 'api_keys';

    protected $fillable = [
        'user_id',
        'api_key',
        'api_key_sandbox',
        'whitelist_ips'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
