<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateFaqTable extends Migration
{
    /**
     * Run the migrations.
     * // $table->string('faq_editor')->nullable();    //   $table->text('faq_editor')->nullable()->change();
     * @return void
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale')->nullable()->comment('');
            $table->string('faq_title')->nullable()->comment('the faq title');
            $table->text('faq_question')->nullable()->comment('the frequent question');
            $table->text('faq_answer')->nullable()->comment('the answer');
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
        Schema::dropIfExists('faq');
    }
}
