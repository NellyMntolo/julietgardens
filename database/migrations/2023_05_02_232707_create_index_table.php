<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateIndexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale');
            $table->string('page_title')->nullable()->comment('');
            $table->string('page_keywords')->nullable()->comment('');
            $table->string('page_description')->nullable()->comment('');
            $table->string('page_image')->nullable()->comment('');
            $table->string('header_title')->nullable()->comment('');
            $table->string('header_description')->nullable()->comment('');
            $table->string('button_one')->nullable()->comment('');
            $table->string('button_two')->nullable()->comment('');
            $table->string('mini_header_one_title')->nullable()->comment('');
            $table->string('mini_header_one_description')->nullable()->comment('');
            $table->string('mini_header_two_title')->nullable()->comment('');
            $table->string('mini_header_two_description')->nullable()->comment('');
            $table->string('mini_header_three_title')->nullable()->comment('');
            $table->string('mini_header_three_description')->nullable()->comment('');
            $table->string('section_one_title')->nullable()->comment('');
            $table->string('section_one_description')->nullable()->comment('');
            $table->string('section_two_title_one')->nullable()->comment('');
            $table->string('section_two_description_one')->nullable()->comment('');
            $table->string('section_two_title_two')->nullable()->comment('');
            $table->string('section_two_description_two')->nullable()->comment('');
            $table->string('section_two_image_two')->nullable()->comment('');
            $table->string('section_three_title')->nullable()->comment('');
            $table->string('section_three_description')->nullable()->comment('');
            $table->string('section_four_title')->nullable()->comment('');
            $table->string('section_four_description')->nullable()->comment('');
            $table->string('section_four_image')->nullable()->comment('');
            $table->string('section_four_name')->nullable()->comment('');
            $table->string('section_four_email')->nullable()->comment('');
            $table->string('section_four_button')->nullable()->comment('');
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
        Schema::dropIfExists('index');
    }
}
