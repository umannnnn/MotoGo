<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggans';
    protected $fillable = [
        'merk',
        'nama',
        'nomor_hp',
        'email',
        'alamat',
        'tgl_pesan',
        'tgl_balik',
        'nomor_ktp',
        'foto_ktp',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
