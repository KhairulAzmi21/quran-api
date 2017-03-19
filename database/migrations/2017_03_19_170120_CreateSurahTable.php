<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('surah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number_of_ayas');
            $table->integer('start');
            $table->text('name');
            $table->text('translated_name');
            $table->text('ename');
            $table->text('type');
            $table->integer('order');
            $table->integer('rukus');
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
        Schema::drop('surah');
    }
}
