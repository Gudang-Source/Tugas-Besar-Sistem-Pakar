<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori',30);
            $table->timestamps();
        });
        DB::table('kategori')->insert([
            [
                'nama_kategori' => 'Penggunaan',
            ],
            [
                'nama_kategori' => 'Jalan',
            ],
            [
                'nama_kategori' => 'Roda',
            ],
            [
                'nama_kategori' => 'Kursi',
            ],
            [
                'nama_kategori' => 'Perjalanan',
            ],
            [
                'nama_kategori' => 'Keperluan',
            ],
            [
                'nama_kategori' => 'Spesial',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori');
    }
}
