<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elevate_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_user');
            $table->integer('have_custom_field');
            $table->longText('post_content');
            $table->text('post_title');
            $table->text('post_excerpt');
            $table->string('post_status', 20);
            $table->string('post_name', 200);
            $table->string('meta_keywords', 255);
            $table->string('meta_description', 255);
            $table->string('meta_title', 255);
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
        Schema::drop('elevate_posts');
    }
}
