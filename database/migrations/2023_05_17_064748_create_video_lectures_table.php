<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_lectures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('video_lecture_category_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->string('video');
            $table->text('description')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->text('seo_description')->nullable();
            $table->timestamps();
        });

        Schema::table('video_lectures', function($table) {
            $table->foreign('video_lecture_category_id')->on('video_lecture_categories')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_lectures');
    }
};
