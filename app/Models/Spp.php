<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected $table = 'mutia_spp';

    protected $fillable = ['tahun', 'nominal'];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'spp_id');
    }
}
