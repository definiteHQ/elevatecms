<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elevate_meta_field', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_field');
            $table->text('konten');
            $table->bigInteger('id_media');
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
        Schema::drop('elevate_meta_field');
    }
}
