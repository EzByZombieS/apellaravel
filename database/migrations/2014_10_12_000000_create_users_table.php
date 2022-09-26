<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('registrationId');
            $table->string('nip',100)->unique();
            $table->string('persNo',100);
            $table->string('firstName',100);
            $table->string('lastName',100);
            $table->string('photo',100);
            $table->string('tandaTangan',100);
            $table->string('paraf',100);
            $table->string('password',100);
            $table->string('salt',100);
            $table->string('placeOfBirth',100);
            $table->date('dateOfBirth');
            $table->integer('jenisKelaminId');
            $table->integer('golonganDarahId');
            $table->integer('agamaId');
            $table->integer('statusPernikahanId');
            $table->string('email',100)->unique();
            $table->string('phoneNumber1',100);
            $table->string('phoneNumber2',100);
            $table->integer('instansiId');
            $table->integer('jabatanId');
            $table->integer('bidangId');
            $table->string('grade',100);
            $table->integer('userPrivilegesId');
            $table->text('address');
            $table->string('noRekening', 50);
            $table->string('namaBank' , 50);
            $table->integer('aktivasiId');
            $table->integer('userTypeId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
