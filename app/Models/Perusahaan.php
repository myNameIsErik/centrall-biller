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
        'ektp_penanggung_jawab',
        'akte_pendirian',
        'npwp',
        'akte_perubahan_terakhir',
        'izin_usaha',
        'izin_lokasi',
        'surat_kuasa',
        'nib',
        'email_perusahaan',
        'jumlah_produk',
        'rating_mean',
        'deposit',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function saldo()
    {
        return $this->hasOne(User::class);
    }
}
