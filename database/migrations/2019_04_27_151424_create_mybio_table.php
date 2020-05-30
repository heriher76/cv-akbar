<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMybioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mybio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo_profile')->nullable();
            $table->string('photo_background')->nullable();
            $table->string('study')->nullable();
            $table->string('hobby')->nullable();
            $table->string('ig')->nullable();
            $table->string('twitter')->nullable();
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
        Schema::dropIfExists('mybio');
    }
}
