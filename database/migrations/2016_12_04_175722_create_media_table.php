<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elevate_media', function (Blueprint $table) {
            $table->increments('id_media');
            $table->string('type', 50);
            $table->string('file_name', 255);
            $table->string('alt_image', 255);
            $table->string('path', 500);
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
        Schema::drop('elevate_media');
    }
}
