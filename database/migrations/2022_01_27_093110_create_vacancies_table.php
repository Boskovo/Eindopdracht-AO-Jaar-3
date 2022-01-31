<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->text('body');
            $table->string('title');
            $table->string('course');
            $table->string('variant');
            $table->string('level');
            $table->text('learn');
            $table->text('demands');
            $table->text('offer');
            $table->string('start_date');
            $table->string('end_date');
            $table->geometry('location');
            $table->boolean('is_active');
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
        Schema::dropIfExists('vacancies');
    }
}
