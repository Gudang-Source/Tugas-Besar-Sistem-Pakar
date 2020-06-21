<?php

namespace App\Http\Controllers;

use App\Model\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::orderBy('id','desc')->get();
        return view('admin/kategori/index',compact(['kategori']));
    }

    public function store(Request $request)
    {
        Kategori::create($request->all());
        return redirect()->back()->with('status','Data Berhasil Masuk');
    }

    public function update(Request $request, Kategori $kategori)
    {
        $kategori = Kategori::find($kategori->id)->update(['nama_kategori'=>$request->value]);
    }

    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);
        return redirect()->back()->with('status','Data Berhasil Dihapus');
    }
}
