<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasils', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hitung_id');
            $table->integer('A')->unsigned();
            $table->integer('B')->unsigned();
            $table->integer('C')->unsigned();
            $table->integer('D')->unsigned();
            $table->integer('E')->unsigned();
            $table->integer('F')->unsigned();
            $table->integer('G')->unsigned();
            $table->integer('H')->unsigned();
            $table->integer('I')->unsigned();
            $table->integer('J')->unsigned();
            $table->integer('K')->unsigned();
            $table->integer('L')->unsigned();
            $table->integer('M')->unsigned();
            $table->integer('total')->unsigned();
            $table->timestamps();
            $table->foreign('hitung_id')->references('id')->on('hitung__posts')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasils');
    }
}
