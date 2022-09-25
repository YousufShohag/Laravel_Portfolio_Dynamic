<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact_skills', function (Blueprint $table) {
            $table->id();
            $table->string('f_description');
            $table->integer('f_nummber');
            $table->string('f_name');
            $table->string('f_title');
            $table->string('s_description');
            $table->string('s_name');
            $table->string('s_number');
            $table->string('s_vloume');
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
        Schema::dropIfExists('fact_skills');
    }
}
