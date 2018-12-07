<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('database_hargas', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('nama_barang');
            $table->string('harga_barang');
            $table->string('category_barang');
            $table->string('kualitas_barang');
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
        Schema::dropIfExists('database_hargas');
    }
}
