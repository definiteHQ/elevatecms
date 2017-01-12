<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elevate_category', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('slug');
            $table->string('description');
            $table->string('excerpt');
            $table->string('image');
            $table->string('seo_title');
            $table->text('seo_description');
            $table->string('seo_keywords');
            $table->integer('parent_id')->default(0);
            $table->integer('order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('elevate_category');
    }
}
