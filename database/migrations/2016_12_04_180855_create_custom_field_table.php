<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elevate_custom_field', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meta_key', 255);
            $table->bigInteger('id_relations');
            $table->bigInteger('id_parent');
            $table->string('type', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('elevate_custom_field');
    }
}
