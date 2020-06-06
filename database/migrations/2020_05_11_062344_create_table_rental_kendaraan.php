<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRentalKendaraan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam',25);
            $table->integer('durasi')->unsigned();
            $table->timestamp('mulai_pinjam');
            $table->integer('harga_total')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental_kendaraan');
    }
}
