<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch', function (Blueprint $table) {
            $table->id();
            $table->integer('position')->nullable();
            $table->string('branchName',50)->nullable();
            $table->integer('districtCityId')->nullable();
            $table->text('address')->nullable();
            $table->string('latitude',50)->nullable();
            $table->string('longitude',50)->nullable();
            $table->string('phoneNumber',50)->nullable();
            $table->string('faxNumber',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('facebookPage',50)->nullable();
            $table->string('twitterPage',50)->nullable();
            $table->integer('mainBranchId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branch');
    }
}
