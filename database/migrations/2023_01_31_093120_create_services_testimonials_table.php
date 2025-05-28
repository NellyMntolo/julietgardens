<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateServicesTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_testimonials_title')->nullable()->comment('');
            $table->string('service_testimonials_description')->nullable()->comment('');
            $table->string('service_testimonials_image')->nullable()->comment('');
            $table->string('service_testimonials_name')->nullable()->comment('');
            $table->integer('service_testimonials_rating')->nullable()->comment('stars from 1 to 5');
            $table->string('service_testimonials_type')->nullable()->comment('');
            $table->integer('service_testimonials_sort')->nullable()->comment('');
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
        Schema::dropIfExists('services_testimonials');
    }
}
