<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_companies', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('EmailAdress');
            $table->integer('PhoneNumber');
            $table->integer('VatNumber');
            $table->string('AddressCity');
            $table->string('AddressZip');
            $table->string('AddressStreet');
            $table->integer('AddressStreetNumber');
            $table->timestamp('timestamps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_companies');
    }
}
