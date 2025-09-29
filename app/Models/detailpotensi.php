<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPotensi extends Model
{
    protected $table = 'detail_potensi';
    protected $primaryKey = 'id_detail_potensi';
    public $timestamps = false;

    public function potensi()
    {
        return $this->belongsTo(PotensiAlam::class, 'id_potensi_alam');
    }
}
