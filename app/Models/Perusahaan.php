<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';
    protected $primaryKey = 'id_perusahaan';
    public $incrementing = true;

    protected $fillable = [
        'id',
        'nama_perusahaan',
        'kategori',
        'verifikasi',
        'tipe_usaha',
        'no_hp_perusahaan',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'alamat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
