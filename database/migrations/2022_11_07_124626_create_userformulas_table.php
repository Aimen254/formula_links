<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserformulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userformulas', function (Blueprint $table) {
            $table->id();
            $table->integer('formula_id');
            $table->integer('image_id');
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('outerheight')->nullable();
            $table->integer('outerwidth')->nullable();
            $table->integer('innerheight')->nullable();
            $table->integer('innerwidth')->nullable();
            $table->string('size');
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
        Schema::dropIfExists('userformulas');
    }
}
