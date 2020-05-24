<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $data_kategori = Kategori::all();
        return view('admin/kategori',['data_kategori' => $data_kategori]);
    }

    public function input_kategori(Request $request)
    {
        Kategori::create(['nama_kategori' => $request->input_kategori]);
        return redirect('/kategori')->with('sukses', 'Kategori Berhasil di Input');
    }
}
