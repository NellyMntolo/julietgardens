<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale')->nullable();
            $table->string('web_name')->nullable();
            $table->string('web_url')->nullable();
            $table->string('web_keywords')->nullable();
            $table->string('web_description')->nullable();
            $table->string('web_meta_data')->nullable();
            $table->string('web_scripts')->nullable();
            $table->string('web_auth')->nullable();
            $table->string('web_service_mail')->nullable();
            $table->string('web_return_mail')->nullable();
            $table->string('web_order_mail')->nullable();
            $table->string('web_default_smtp')->nullable();
            $table->string('web_logo')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
}
