<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function motor() {
        return $this->hasMany(motor::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
