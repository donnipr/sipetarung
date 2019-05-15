<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardpemdasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardpemdas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('desa');
            $table->string('kec');
            $table->string('nosertf');
            $table->string('hak');
            $table->string('luas');
            $table->string('penggunaan');
            $table->string('latlong');
            $table->string('alamat');
            $table->string('maprtrw');
            $table->string('image');
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
        Schema::dropIfExists('cardpemdas');
    }
}
