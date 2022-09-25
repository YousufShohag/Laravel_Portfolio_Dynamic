<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_long_description')->nullable();
            $table->string('title')->nullable();
            $table->string('about_short_description')->nullable();
            $table->string('image')->nullable();
            $table->date('birthday')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->integer('age')->nullable();
            $table->string('city')->nullable();
            $table->string('degree')->nullable();
            $table->string('freelance')->nullable();
            $table->string('email')->nullable();
            $table->string('about_footer_desscription')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
