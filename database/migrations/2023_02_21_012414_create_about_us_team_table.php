<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateAboutUsTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_team', function (Blueprint $table) {
            $table->increments('id');
            $table->string('about_us_team_name')->nullable()->comment('');
            $table->string('about_us_team_title')->nullable()->comment('');
            $table->string('about_us_team_image')->nullable()->comment('');
            $table->string('about_us_team_socials_one')->nullable()->comment('');
            $table->string('about_us_team_socials_two')->nullable()->comment('');
            $table->string('about_us_team_socials_three')->nullable()->comment('');
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
        Schema::dropIfExists('about_us_team');
    }
}
