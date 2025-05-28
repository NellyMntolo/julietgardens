<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateServicesFeaturedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_featured', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_featured_title')->nullable()->comment('');
            $table->string('service_featured_description')->nullable()->comment('');
            $table->string('service_featured_image')->nullable()->comment('');
            $table->integer('service_featured_sort')->nullable()->comment('');
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
        Schema::dropIfExists('services_featured');
    }
}
