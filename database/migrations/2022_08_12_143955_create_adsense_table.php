<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adsense', function (Blueprint $table) {
            $table->id();
            $table->text('head')->nullable();
            $table->text('beforeContent')->nullable();
            $table->text('insideContent')->nullable();
            $table->text('afterContent')->nullable();
            $table->text('footer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adsense');
    }
}
