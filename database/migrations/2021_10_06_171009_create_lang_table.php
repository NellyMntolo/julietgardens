<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lang', function (Blueprint $table) {
            $table->increments('id')->comment('');
            $table->string('locale')->comment('');
            $table->string('name')->comment('');
            $table->string('status')->comment('');
            $table->string('default_lang')->comment('');
            $table->string('active_lang')->comment('');
            $table->integer('lang_sort')->default('0')->comment('Language sorting for convenience and us experience');
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
        Schema::dropIfExists('lang');
    }
}
