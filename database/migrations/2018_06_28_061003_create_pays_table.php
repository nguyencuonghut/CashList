<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pays', function (Blueprint $table) {$table->increments('id');
            $table->integer('num_500k')->nullable();
            $table->integer('num_200k')->nullable();
            $table->integer('num_100k')->nullable();
            $table->integer('num_50k')->nullable();
            $table->integer('num_20k')->nullable();
            $table->integer('num_10k')->nullable();
            $table->integer('num_5k')->nullable();
            $table->integer('num_2k')->nullable();
            $table->integer('num_1k')->nullable();
            $table->integer('num_500')->nullable();
            $table->integer('num_other')->nullable();
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
        Schema::dropIfExists('pays');
    }
}
