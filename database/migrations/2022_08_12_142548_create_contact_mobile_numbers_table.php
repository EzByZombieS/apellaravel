<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactMobileNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_mobile_numbers', function (Blueprint $table) {
            $table->id();
            $table->integer('contactProfileId')->nullable();
            $table->string('caption',50)->nullable();
            $table->string('mobileNumber',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_mobile_numbers');
    }
}
