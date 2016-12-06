<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elevate_nav_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_media');
            $table->bigInteger('id_relations');
            $table->bigInteger('type_relations');
            $table->bigInteger('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('elevate_nav_menu');
    }
}
