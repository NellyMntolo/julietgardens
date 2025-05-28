<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale')->nullable()->comment('');
            $table->string('page_title')->nullable()->comment('');
            $table->string('page_keywords')->nullable()->comment('');
            $table->text('page_description')->nullable()->comment('');
            $table->string('header_title')->nullable()->comment('');
            $table->text('header_description')->nullable()->comment('');
            $table->string('content_header_title')->nullable()->comment('');
            $table->text('content_header_description')->nullable()->comment('');
            $table->string('contact_name')->nullable()->comment('');
            $table->string('contact_email')->nullable()->comment('');
            $table->string('contact_subject')->nullable()->comment('');
            $table->text('contact_message')->nullable()->comment('');
            $table->string('contact_button')->nullable()->comment('');
            $table->string('contact_ceo_title')->nullable()->comment('');
            $table->text('contact_ceo_description')->nullable()->comment('');
            $table->string('contact_follow')->nullable()->comment('');
            $table->string('contact_mail_us')->nullable()->comment('');
            $table->string('contact_mail_us_details')->nullable()->comment('');
            $table->string('contact_address')->nullable()->comment('');
            $table->string('contact_address_details')->nullable()->comment('');
            $table->string('contact_phone')->nullable()->comment('');
            $table->string('contact_phone_details')->nullable()->comment('');
            $table->string('contact_map_lat')->nullable()->comment('');
            $table->string('contact_map_long')->nullable()->comment('');
            $table->string('page_image')->nullable()->comment('');
            $table->string('ceo_image')->nullable()->comment('');
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
        Schema::dropIfExists('contact_us');
    }
}
