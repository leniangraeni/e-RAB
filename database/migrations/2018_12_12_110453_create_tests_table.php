<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hasil');
            $table->integer('I');
            $table->integer('II');
            $table->integer('III');
            $table->integer('IV');
            $table->integer('V');
            $table->integer('VI');
            $table->integer('VII');
            $table->integer('VIII');
            $table->integer('IX');
            $table->integer('X');
            $table->integer('XI');
            $table->integer('XII');
            $table->integer('XIII');
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
        Schema::dropIfExists('tests');
    }
}
