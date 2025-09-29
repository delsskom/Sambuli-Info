<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potensi extends Model
{
    use HasFactory;

    protected $table = 'potensi'; // nama tabel
    protected $fillable = ['nama_potensi', 'rt_id'];

    // Relasi ke RT (setiap Potensi dimiliki 1 RT)
    public function rt()
    {
        return $this->belongsTo(Rt::class, 'rt_id');
    }
}
