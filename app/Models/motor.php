<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motor extends Model
{
    use HasFactory;
    protected $table = 'motor';
    protected $fillable = [
        'merkMotor',
        'harga',
        'bahanBakar',
        'mesin',
        'warna',
        'speedometer',
        'category_id',
        'tahunKeluaran',
        'review',
        'img1',
        'img2',
        'img3',
        'img4',
        'user_id'
    ];
    protected $with = ['category', 'user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
