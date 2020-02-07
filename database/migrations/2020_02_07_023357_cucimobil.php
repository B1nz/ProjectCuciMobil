<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cucimobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cucimobil', function (Blueprint $table) {
            $table->increments('id');
            $table->char('plat_mobil', 100);
            $table->char('nama_mobil', 100);
            $table->char('jenis_cuci', 100);
            $table->char('foto', 100);
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
        Schema::dropIfExists('cucimobil');
    }
}
