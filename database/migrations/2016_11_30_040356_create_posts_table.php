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
            $table->integer('user_id')->unsigned();
            $table->bigInteger('parent_id');
            $table->longText('content');
            $table->text('title');
            $table->text('excerpt');
            $table->string('featured_image');
            $table->string('publish_status', 20);
            $table->string('slug', 200);
            $table->string('seo_keywords', 255);
            $table->string('seo_description', 255);
            $table->string('seo_title', 255);
            $table->string('type')->default('post');
            $table->timestamps();

            $table->foreign('user_id')
                ->on('elevate_users')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
