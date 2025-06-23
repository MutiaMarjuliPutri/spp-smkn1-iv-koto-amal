<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'mutia_petugas';

    protected $fillable = ['nama', 'username', 'password', 'level'];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'petugas_id');
    }
}
