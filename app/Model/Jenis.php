<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'jenis_kendaraan';

    public function rules()
    {
        return $this->belongsTo(Rules::class,'id_rule');
    }
}
