<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableRules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->boolean('K001');
            $table->boolean('K002');
            $table->boolean('K003');
            $table->boolean('K004');
            $table->boolean('K005');
            $table->boolean('K006');
            $table->boolean('K007');
            $table->boolean('K008');
            $table->boolean('K009');
            $table->boolean('K010');
            $table->boolean('K011');
            $table->boolean('K012');
            $table->boolean('K013');
            $table->boolean('K014');
            $table->boolean('K015');
            $table->boolean('K016');
            $table->boolean('K017');
            $table->boolean('K018');
            $table->boolean('K019');
            $table->boolean('K020');
            $table->timestamps();
        });
        DB::table('rules')->insert([
            [
                'K001' => 1, 'K002' => 0, 'K003' => 0, 'K004' => 1, 'K005' => 1, 'K006' => 1, 'K007' => 0, 'K008' => 0, 'K009' => 0, 'K010' => 1,
                'K011' => 0, 'K012' => 0, 'K013' => 1, 'K014' => 1, 'K015' => 1, 'K016' => 0, 'K017' => 0, 'K018' => 0, 'K019' => 0, 'K020' => 0,
            ],
            [
                'K001' => 0, 'K002' => 1, 'K003' => 0, 'K004' => 0, 'K005' => 1, 'K006' => 1, 'K007' => 0, 'K008' => 1, 'K009' => 0, 'K010' => 0,
                'K011' => 0, 'K012' => 0, 'K013' => 1, 'K014' => 0, 'K015' => 0, 'K016' => 1, 'K017' => 1, 'K018' => 1, 'K019' => 0, 'K020' => 0,
            ],
            [
                'K001' => 0, 'K002' => 1, 'K003' => 1, 'K004' => 1, 'K005' => 0, 'K006' => 1, 'K007' => 0, 'K008' => 0, 'K009' => 1, 'K010' => 0,
                'K011' => 0, 'K012' => 0, 'K013' => 1, 'K014' => 1, 'K015' => 0, 'K016' => 1, 'K017' => 1, 'K018' => 0, 'K019' => 0, 'K020' => 0,
            ],
            [
                'K001' => 0, 'K002' => 1, 'K003' => 0, 'K004' => 1, 'K005' => 1, 'K006' => 0, 'K007' => 1, 'K008' => 0, 'K009' => 0, 'K010' => 0,
                'K011' => 1, 'K012' => 0, 'K013' => 1, 'K014' => 1, 'K015' => 1, 'K016' => 0, 'K017' => 1, 'K018' => 0, 'K019' => 1, 'K020' => 0,
            ],
            [
                'K001' => 0, 'K002' => 1, 'K003' => 0, 'K004' => 1, 'K005' => 1, 'K006' => 0, 'K007' => 1, 'K008' => 0, 'K009' => 0, 'K010' => 0,
                'K011' => 0, 'K012' => 1, 'K013' => 1, 'K014' => 1, 'K015' => 1, 'K016' => 0, 'K017' => 1, 'K018' => 0, 'K019' => 1, 'K020' => 1,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules');
    }
}
