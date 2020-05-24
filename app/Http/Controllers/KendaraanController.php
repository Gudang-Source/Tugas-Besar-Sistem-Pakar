<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Model\Kendaraan;
use \App\Model\Kategori;

class KendaraanController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $kendaraan = Kendaraan::all();
        return view('admin/kendaraan',['kategori'=>$kategori,'data_kendaraan'=>$kendaraan]);
    }

    public function store(Request $request)
    {
        Kendaraan::create($request->all());
        return redirect('/kendaraan')->with('sukses', 'Kendaraan Berhasil di Input');
    }
}
