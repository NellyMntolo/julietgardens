<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateIndexNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('news_image')->nullable()->comment('');
            $table->string('news_image_title')->nullable()->comment('');
            $table->string('news_content_title')->nullable()->comment('');
            $table->string('news_content')->nullable()->comment('');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('index_news');
    }
}
