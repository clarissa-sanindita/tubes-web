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
        Schema::create('courts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pegawai_id')
            ->references('id')
            ->on('employees')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('nama_lap',100);
            $table->string('kategori',100);
            $table->string('image');
            $table->integer('harga');
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
        Schema::dropIfExists('courts');
    }
};
