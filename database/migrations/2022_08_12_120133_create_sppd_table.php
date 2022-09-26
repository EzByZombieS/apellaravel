<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sppd', function (Blueprint $table) {
            $table->id();
            $table->integer('userId')->nullable();
            $table->string('keterangan',50)->nullable();
            $table->integer('jenisSppdId')->nullable();
            $table->integer('alatTransportasiId')->nullable();
            $table->integer('tempatAsalId')->nullable();
            $table->string('tempatAsal',50)->nullable();
            $table->string('tujuan',50)->nullable();
            $table->string('penaggung',50)->nullable();
            $table->string('posBeban',50)->nullable();
            $table->integer('tujuanId')->nullable();
            $table->dateTime('tanggalPembuatan')->nullable();
            $table->date('tanggalBerangkat')->nullable();
            $table->date('tanggalKembali')->nullable();
            $table->integer('statusSppdId')->nullable();
            $table->text('alasan')->nullable();
            $table->date('tanggalTiketBerangkat')->nullable();
            $table->double('tiketBerangkat')->nullable();
            $table->date('tanggalTiketKembali')->nullable();
            $table->double('tiketKembali')->nullable();
            $table->double('bagasi')->nullable();
            $table->double('penginapan')->nullable();
            $table->double('total')->nullable();
            $table->string('noTrip',50)->nullable();
            $table->integer('laporan')->nullable();
            $table->integer('cap')->nullable();
            $table->integer('tiket')->nullable();
            $table->integer('hotel')->nullable();
            $table->integer('boarding')->nullable();
            $table->integer('reimbuse')->nullable();
            $table->integer('statusDokumenId')->nullable();
            $table->integer('cetakSppd')->nullable();
            $table->integer('cetakReimbuse')->nullable();
            $table->integer('cetakPembayaran')->nullable();
            $table->text('alasanReimbuse')->nullable();
            $table->text('alasanPending')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sppd');
    }
}
