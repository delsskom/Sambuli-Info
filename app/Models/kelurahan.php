<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'kelurahan';
    protected $primaryKey = 'id_kel';
    public $timestamps = false;

    public function rts()
    {
        return $this->hasMany(Rt::class, 'id_kel');
    }
}
