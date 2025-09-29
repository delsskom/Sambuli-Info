<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PotensiAlam extends Model
{
    protected $table = 'potensi_alam';
    protected $primaryKey = 'id_potensi_alam';
    public $timestamps = false;

    public function detail()
    {
        return $this->hasMany(DetailPotensi::class, 'id_potensi_alam');
    }

    public function rt()
    {
        return $this->belongsTo(Rt::class, 'id_rt');
    }
}
