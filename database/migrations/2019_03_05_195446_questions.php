<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Questions extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('paper_id');
            $table->integer('type');
            $table->integer('numP');
            $table->integer('numC');
            $table->integer('sp');
            $table->integer('evaltype');
            $table->integer('number');
            $table->string('marks'); 
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
        Schema::dropIfExists('questions');
    }
}
