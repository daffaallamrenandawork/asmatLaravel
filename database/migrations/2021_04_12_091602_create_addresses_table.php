<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();

            $table->unsignedBigInteger('costumer_id')->index();

            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('email');
            $table->string('telepon', 20);
            $table->text('alamat_lengkap');
            $table->integer('provinsi_id');
            $table->integer('kota_id');
            $table->integer('kecamatan_id');
            $table->string('kode_pos');
            $table->boolean('is_main');

            $table->foreign('costumer_id')->references('id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
