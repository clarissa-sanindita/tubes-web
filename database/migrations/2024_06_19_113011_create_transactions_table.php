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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelanggan_id')
            ->references('id')
            ->on('customers')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('pegawai_id')
            ->references('id')
            ->on('employees')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('lapangan_id')
            ->references('id')
            ->on('courts')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('tgl_book', 100);
            $table->string('waktu_book',100);
            $table->integer('jumlah_jam');
            $table->integer('total');

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
        Schema::dropIfExists('transactions');
    }
};
