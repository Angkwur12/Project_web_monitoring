<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTangki1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tangki1', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_cek');
            $table->string('tinggi_cairan');
            $table->string('volume_cairan');
            $table->string('suhu_cairan');
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
        Schema::dropIfExists('tangki1');
    }
}
