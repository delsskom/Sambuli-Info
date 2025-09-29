<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'rt', 'jumlah_kk', 'perkebunan', 'peternakan', 'perikanan', 'sumber_air', 'lainnya'
    ];
}
