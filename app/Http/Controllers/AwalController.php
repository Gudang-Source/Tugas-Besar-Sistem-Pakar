<?php

namespace App\Http\Controllers;

use App\Model\Jenis;
use App\Model\Rental;
use App\Model\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AwalController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function booking()
    {
        $kendaraan = Kendaraan::all();
        return view('booking',compact(['kendaraan']));
    }

    public function hasil(Request $request)
    {
        //Mencari ID yang diinputkan
        $filter = $request->except(['nama_peminjam','durasi','mulai_pinjam','_token']);
        $qry = DB::table('rules')->select('id');
        array_pop($filter);
        $rule_input = array();
        foreach($filter as $where){
            $qry->where($where,'=','1');
            array_push($rule_input,$where);
        }
        $qry->whereRaw('1 = 1')->get();
        $id = '';

        //Menentukan Rules
        $rules = array(
            array("K001","K004","K005","K006","K010","K013","K014","K015"),
            array("K002","K005","K006","K008","K013","K016","K017","K018"),
            array("K002","K003","K004","K006","K009","K013","K014","K016","K017"),
            array("K002","K004","K005","K007","K011","K013","K014","K015","K017","K019"),
            array("K002","K004","K005","K007","K012","K013","K014","K015","K017","K019","K020"));

        $status = false;

        //Mencocokan Data Dengan Data input
        for($i = 0; $i < sizeof($rules); $i++){
            $result = ($rule_input==$rules[$i]);
            if($result){
                $status = true;
            }
        }

        if($result == true){
            return redirect()->back()->with('status','Data Tidak Ditemukan');
        }else{
            $id = $qry->value('id');
            $cari_jenis = Jenis::where('rules_id','=',$id)->get();
            foreach($cari_jenis as $cj){
                $harga = $cj;
            }

            //Menginputkan Ke Tabel Rental
        Rental::create([
            'nama_peminjam' => $request->nama_peminjam,
            'durasi' => $request->durasi,
            'mulai_pinjam' => date('Y-m-d',strtotime($request->mulai_pinjam)),
            'harga_total' => ($request->durasi * $harga->harga)
        ]);;
        $rental = DB::table('rental_kendaraan')->latest()->first();
            return view('hasil',compact(['cari_jenis','rental']));
        }
    }

}
