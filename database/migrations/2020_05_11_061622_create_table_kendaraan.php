<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableKendaraan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kendaraan',5);
            $table->string('keterangan',30);
            $table->foreignId('id_kategori')->constrained('kategori');
            $table->timestamps();
        });
        DB::table('kendaraan')->insert([
            ['kode_kendaraan'   => 'K001','keterangan' => 'Harian','id_kategori'            => 1],
            ['kode_kendaraan'   => 'K002','keterangan' => 'Wisata','id_kategori'            => 1],
            ['kode_kendaraan'   => 'K003','keterangan' => 'Hobby','id_kategori'             => 1],
            ['kode_kendaraan'   => 'K004','keterangan' => 'Ringan','id_kategori'            => 2],
            ['kode_kendaraan'   => 'K005','keterangan' => 'Sedang','id_kategori'            => 2],
            ['kode_kendaraan'   => 'K006','keterangan' => 'Berat','id_kategori'             => 2],
            ['kode_kendaraan'   => 'K007','keterangan' => 4,'id_kategori'                   => 3],
            ['kode_kendaraan'   => 'K008','keterangan' => 6,'id_kategori'                   => 3],
            ['kode_kendaraan'   => 'K009','keterangan' => 2,'id_kategori'                   => 4],
            ['kode_kendaraan'   => 'K010','keterangan' => 4,'id_kategori'                   => 4],
            ['kode_kendaraan'   => 'K011','keterangan' => 8,'id_kategori'                   => 4],
            ['kode_kendaraan'   => 'K012','keterangan' => 20,'id_kategori'                  => 4],
            ['kode_kendaraan'   => 'K013','keterangan' => 45,'id_kategori'                  => 4],
            ['kode_kendaraan'   => 'K014','keterangan' => 'Dalam Kota','id_kategori'        => 5],
            ['kode_kendaraan'   => 'K015','keterangan' => 'Luar kota','id_kategori'         => 5],
            ['kode_kendaraan'   => 'K016','keterangan' => 'Tenaga Besar','id_kategori'      => 6],
            ['kode_kendaraan'   => 'K017','keterangan' => 'Model Mewah','id_kategori'       => 6],
            ['kode_kendaraan'   => 'K018','keterangan' => 'Perlu Supir Khusus','id_kategori'=> 6],
            ['kode_kendaraan'   => 'K019','keterangan' => 'Standar Keluarga','id_kategori'  => 6]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraan');
    }
}
