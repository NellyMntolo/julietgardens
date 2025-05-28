<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateServicesWeDoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_we_do', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_we_do_title')->nullable()->comment('');
            $table->string('service_we_do_description')->nullable()->comment('');
            $table->string('service_we_do_image')->nullable()->comment('');
            $table->integer('service_we_do_sort')->nullable()->comment('');
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
        Schema::dropIfExists('services_we_do');
    }
}
