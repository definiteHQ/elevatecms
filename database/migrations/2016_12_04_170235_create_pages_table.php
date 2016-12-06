<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elevate_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_user');
            $table->integer('have_custom_field');
            $table->text('title');
            $table->text('feature_image');
            $table->string('template_name', 255);
            $table->string('page_status', 20);
            $table->string('page_name', 200);
            $table->string('meta_keywords', 255);
            $table->string('meta_description', 255);
            $table->string('meta_title', 255);
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
        Schema::drop('elevate_pages');
    }
}
