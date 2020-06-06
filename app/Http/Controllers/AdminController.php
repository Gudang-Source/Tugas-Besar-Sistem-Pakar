<?php

namespace App\Http\Controllers;

use App\Model\Jenis;
use App\Model\Rental;
use App\Model\Rules;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    public function jenis()
    {
        $jenis = Jenis::all();
        return view('admin/jenis',compact(['jenis']));
    }

    public function rules()
    {
        $rules = Rules::all();
        return view('admin/rules',compact(['rules']));
    }

    public function rental()
    {
        $rental = Rental::all();
        return view('admin/rental',compact(['rental']));
    }
}
