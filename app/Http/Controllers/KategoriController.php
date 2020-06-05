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

    public function edit($id)
    {
        $kategori = \App\Model\Kategori::find($id);
        return view('admin/kategori/edit',['kategori => $kategori']);
    }

    public function update(Request $request,$id)
    {
        Kategori::update(['nama_kategori' => $request->update_kategori]);
        dd($Kategori);
    }
}
