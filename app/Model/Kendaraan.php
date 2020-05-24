<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraan';
    protected $fillable = ['kode_kendaraan', 'keterangan', 'id_kategori'];
}
