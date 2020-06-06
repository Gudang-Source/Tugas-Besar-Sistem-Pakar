<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kendaraan extends Model
{
    protected $table = 'kendaraan';
    protected $fillable = ['kode_kendaraan', 'keterangan', 'id_kategori'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'id_kategori');
    }

    public function kode_kendaraan()
    {
        $q = DB::table('kendaraan')->select(DB::raw('MAX(RIGHT(kode_kendaraan,3)) as kd_max'));
        if ($q->count() != 0) {
            foreach ($q->get() as $k) {
                $tmp = intval($k->kd_max) + 1;
                $kodemax = str_pad($tmp, 3, "0", STR_PAD_LEFT);
                $kd = "K" . $kodemax;
            }
        } else {
            $kd = "K001";
        }
        return $kd;
    }
}
