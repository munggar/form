<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('buku_id')->unsigned();   
            $table->integer('penjualan_id')->unsigned();
            $table->foreign('penjualan_id')->references('id_penjualan')->on('penjualan');
            $table->string('nama');
            $table->string('alamat');
            $table->string('telp');
            $table->integer('jumlah');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
