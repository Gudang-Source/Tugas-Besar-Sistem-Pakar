<?php

namespace App\Http\Controllers;

use App\Model\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rental_kendaraan = Rental::all();
        return view('admin/rental',['rental' => $rental_kendaraan]);
    }
}
