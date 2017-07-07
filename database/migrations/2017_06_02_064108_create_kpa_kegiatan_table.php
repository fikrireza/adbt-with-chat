<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKpaKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adik_kegiatan_kpa', function(Blueprint $table){
          $table->increments('id');
          $table->string('kode_kegiatan');
          $table->integer('id_kegiatan')->unsigned();
          $table->integer('id_program')->unsigned();
          $table->integer('id_master_kpa')->unsigned()->nullable();
          $table->integer('flag_status')->unsigned();
          $table->integer('id_aktor')->unsigned();
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
        //
    }
}
