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
        Schema::create('kasir', function (Blueprint $table) {
            $table->increments('id_kasir');
            $table->string('nama');
            $table->string('foto');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('status_kasir');
            $table->string('username')->unique();
            $table->string('passwd');
            $table->string('akses');
            $table->rememberToken();
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
