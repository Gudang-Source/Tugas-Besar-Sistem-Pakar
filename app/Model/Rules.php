<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{
    protected $table = 'rules';

    public function jenis()
    {
        return $this->hasOne(Jenis::class);
    }
}
