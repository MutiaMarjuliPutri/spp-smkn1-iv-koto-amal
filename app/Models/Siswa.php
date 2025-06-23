<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'mutia_siswa';

    protected $fillable = ['nisn', 'nama', 'kelas', 'alamat'];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'siswa_id');
    }
}
