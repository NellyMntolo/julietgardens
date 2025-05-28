<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateSocialMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->increments('id')->comment('');
            $table->string('locale')->nullable()->comment('');
            $table->string('s_name')->nullable()->comment('this is the social media platform name');
            $table->string('s_target')->nullable()->comment('');
            $table->string('s_visibility')->nullable()->comment('');
            $table->string('s_url')->nullable()->comment('');
            $table->integer('s_sort')->default('0')->comment('Sort your favorite social media platform for the front end adjustment');
            $table->enum('soft_delete', ['0', '1'])->default('0')->comment('delete without removing item');
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
        Schema::dropIfExists('social_media');
    }
}
