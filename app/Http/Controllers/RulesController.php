<?php

namespace App\Http\Controllers;

use App\Model\Rules;
use App\Model\Kendaraan;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function index()
    {
        $rules = Rules::all();
        $kendaraan = Kendaraan::all();
        return view('admin/rules',['rules'=>$rules,'data_kendaraan'=>$kendaraan]);
    }
}
