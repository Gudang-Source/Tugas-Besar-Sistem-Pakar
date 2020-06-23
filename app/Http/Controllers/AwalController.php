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
        return view('booking', compact(['kendaraan']));
    }

    public function hasil(Request $request)
    {
        $this->validate($request, [
            'nama_peminjam' => 'required',
            'durasi'        => 'required|numeric',
            'mulai_pinjam'  => 'required|date',
            'keperluan'     => 'required',
            'medan'         => 'required',
            'roda'          => 'required',
            'kursi'         => 'required',
            'perjalanan'    => 'required',
            'tambahan'      => 'required'
        ]);

        //Mencari ID yang diinputkan
        $filter = $request->except(['nama_peminjam', 'durasi', 'mulai_pinjam', '_token']);
        $qry = DB::table('rules')->select('id');
        $rule_input = array();
        foreach ($filter as $where) {
            $qry->where($where, '=', '1');
            array_push($rule_input, $where);
        }
        $qry->whereRaw('1 = 1')->get();
        $id = '';

        //Menentukan Rules
        $rules = [
            ['K001', 'K005', 'K007', 'K011', 'K015', 'K019'],
            ['K003', 'K004', 'K007', 'K009', 'K014', 'K017'],
            ['K003', 'K006', 'K007', 'K010', 'K015', 'K016'],
            ['K002', 'K005', 'K008', 'K012', 'K015', 'K018'],
            ['K002', 'K005', 'K008', 'K013', 'K015', 'K018']
        ];

        $status = false;

        //Mencocokan Data Dengan Data input
        for ($i = 0; $i < sizeof($rules); $i++) {
            $result = ($rule_input == $rules[$i]);
            if ($result) {
                $status = true;
            }
        }

        if ($result == true) {
            $id = $qry->value('id');
            $cari_jenis = Jenis::where('rules_id', '=', $id)->get();
            foreach ($cari_jenis as $cj) {
                $harga = $cj;
            }

            //Menginputkan Ke Tabel Rental
            Rental::create([
                'nama_peminjam' => $request->nama_peminjam,
                'durasi'        => $request->durasi,
                'mulai_pinjam'  => date('Y-m-d', strtotime($request->mulai_pinjam)),
                'harga_total'   => ($request->durasi * $harga->harga)
            ]);;
            $rental = DB::table('rental_kendaraan')->latest()->first();
            return view('hasil', compact(['cari_jenis', 'rental']));
        } else {
            $id = $qry->value('id');

            if ($id == null) {
                return redirect('/')->with('status', 'Data Tidak Ditemukan');
            } else {
                $cari_jenis = Jenis::where('rules_id', '=', $id)->get();
                foreach ($cari_jenis as $cj) {
                    $harga = $cj;
                }

                //Menginputkan Ke Tabel Rental
                Rental::create([
                    'nama_peminjam' => $request->nama_peminjam,
                    'durasi'        => $request->durasi,
                    'mulai_pinjam'  => date('Y-m-d', strtotime($request->mulai_pinjam)),
                    'harga_total'   => ($request->durasi * $harga->harga)
                ]);;
                $rental = DB::table('rental_kendaraan')->latest()->first();
                return view('hasil', compact(['cari_jenis', 'rental']));
            }
        }
    }
}
