<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workstates', function (Blueprint $table) {
            $table->id();
            $table->integer('UserID');
            $table->string('Title');
            $table->text('Description');
            $table->timestamp('Date');
            $table->integer('ApprovelID');
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
        Schema::dropIfExists('workstates');
    }
}
