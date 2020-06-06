<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableJenisKendaraan extends Migration
{
    public function up()
    {
        Schema::create('jenis_kendaraan', function (Blueprint $table) {
            $table->foreignId('rules_id')->constrained('rules');
            $table->string('jns_kendaraan',30);
            $table->integer('harga',false,true);
            $table->timestamps();
        });

        DB::table('jenis_kendaraan')->insert([
            ['rules_id' => 1,'jns_kendaraan' => 'Family Car','harga' => 400000],
            ['rules_id' => 2,'jns_kendaraan' => 'Sport Car','harga' => 3000000],
            ['rules_id' => 3,'jns_kendaraan' => 'Off-Road Car','harga' => 600000],
            ['rules_id' => 4,'jns_kendaraan' => 'Medium Bus','harga' => 1500000],
            ['rules_id' => 5,'jns_kendaraan' => 'Big Bus','harga' => 3000000],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_kendaraan');
    }
}
