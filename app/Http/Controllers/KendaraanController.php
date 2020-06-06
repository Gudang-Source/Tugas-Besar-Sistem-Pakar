<?php

namespace App\Http\Controllers;

use App\Model\Kategori;
use App\Model\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = new Kendaraan;
        $kategori = Kategori::all();
        return view('admin/kendaraan/index',compact(['kendaraan','kategori']));
    }

    public function store(Request $request)
    {
        Kendaraan::create($request->all());
        return redirect()->back()->with('status','Data Berhasil Masuk');
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        $kendaraan = Kendaraan::find($kendaraan->id)->update(['keterangan'=>$request->value]);
    }

    public function destroy(Kendaraan $kendaraan)
    {
        Kendaraan::destroy($kendaraan->id);
        return redirect()->back()->with('status','Data Berhasil Dihapus');
    }
}
