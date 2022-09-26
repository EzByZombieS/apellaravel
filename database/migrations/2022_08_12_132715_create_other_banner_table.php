<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_banner', function (Blueprint $table) {
            $table->id();
            $table->integer('pagesId')->nullable();
            $table->string('title',50)->nullable();
            $table->string('title_sl',50)->nullable();
            $table->string('title_el',50)->nullable();
            $table->text('banner')->nullable();
            $table->integer('publishStatusId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('other_banner');
    }
}
