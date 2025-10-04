<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranaPrasarana extends Model
{
    use HasFactory;

    protected $table = 'sarana_prasarana'; // nama tabel

    protected $fillable = [
        'potensis_id',
        'kategori',
        'jenis',
        'jumlah',
    ];

    // relasi ke potensis
    public function potensi()
    {
        return $this->belongsTo(Potensis::class, 'potensis_id');
    }
}
