<?php

namespace App\Http\Controllers;

use App\Model\Rules;
use App\Model\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $rules = Rules::all();
        $jns_kendaraan = Jenis::all();
        return view('admin/jenis',['rules'=>$rules,'data_kendaraan'=>$jns_kendaraan]);
    }
}
