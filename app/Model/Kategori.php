<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori'];

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class);
    }
}
