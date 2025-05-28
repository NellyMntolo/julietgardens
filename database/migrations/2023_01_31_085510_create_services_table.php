<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale')->nullable()->comment('');
            $table->string('page_title')->nullable()->comment('');
            $table->string('page_keywords')->nullable()->comment('');
            $table->string('page_description')->nullable()->comment('');
            $table->string('header_title')->nullable()->comment('');
            $table->string('header_description')->nullable()->comment('');
            $table->string('services_featured_title')->nullable()->comment('');
            $table->text('services_featured_description')->nullable()->comment('');
            $table->string('services_we_do_title')->nullable()->comment('');
            $table->text('services_we_do_description')->nullable()->comment('');
            $table->string('services_testimonials_title')->nullable()->comment('');
            $table->text('services_testimonials_description')->nullable()->comment('');
            $table->string('page_image')->nullable()->comment('');
            $table->string('page_image_two')->nullable()->comment('');
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
        Schema::dropIfExists('services');
    }
}
