<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language', function (Blueprint $table) {
            $table->id();
            $table->string('primaryCode',50)->nullable();
            $table->string('primaryLanguage',50)->nullable();
            $table->string('primaryFlag',50)->nullable();
            $table->string('secondaryCode',50)->nullable();
            $table->string('secondaryLanguage',50)->nullable();
            $table->string('secondaryFlag',50)->nullable();
            $table->integer('secondaryEnabledId')->nullable();
            $table->string('extendedCode',50)->nullable();
            $table->string('extendedLanguage',50)->nullable();
            $table->string('extendedFlag',50)->nullable();
            $table->integer('extendedEnabledId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language');
    }
}
