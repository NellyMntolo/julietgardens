<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale');
            $table->string('page_title')->nullable()->comment('');
            $table->string('page_keywords')->nullable()->comment('');
            $table->string('page_description')->nullable()->comment('');
            $table->string('header_title')->nullable()->comment('');
            $table->string('header_description')->nullable()->comment('');
            $table->string('header_title_two')->nullable()->comment('');
            $table->string('header_description_two')->nullable()->comment('');
            $table->text('header_description_three')->nullable()->comment('');
            $table->string('section_quote')->nullable()->comment('');
            $table->string('header_title_four')->nullable()->comment('');
            $table->string('header_description_four')->nullable()->comment('');
            $table->string('page_content')->nullable()->comment('');
            $table->string('page_image')->nullable()->comment('');
            $table->string('page_image_two')->nullable()->comment('');
            $table->integer('farm_seeds')->nullable()->comment('%');
            $table->integer('farm_growth')->nullable()->comment('%');
            $table->integer('farm_economy')->nullable()->comment('%');
            $table->integer('farm_planting')->nullable()->comment('%');
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
        Schema::dropIfExists('about_us');
    }
}
