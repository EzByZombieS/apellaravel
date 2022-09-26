<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReimbuseSppdSpvAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reimbuse_sppd_spv_admin', function (Blueprint $table) {
            $table->id();
            $table->integer('sppdId')->nullable();
            $table->integer('userId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reimbuse_sppd_spv_admin');
    }
}
