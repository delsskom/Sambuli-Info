<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    use HasFactory;

    protected $table = 'rt'; // nama tabel
    protected $fillable = ['nama']; // kolom yang bisa diisi

    // Relasi ke Potensi (1 RT punya banyak Potensi)
    public function potensi()
    {
        return $this->hasMany(Potensi::class, 'rt_id');
    }
}
