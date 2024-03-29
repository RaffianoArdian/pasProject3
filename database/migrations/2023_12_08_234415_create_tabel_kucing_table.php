<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelKucingTable extends Migration
{
    public function up()
    {
        Schema::create('tabel_kucing', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->integer('berat');
            $table->string('warna');
            $table->string('kondisi_kesehatan');
            $table->unsignedBigInteger('jenis_id')->default(1);
            $table->timestamps();

            $table->foreign('jenis_id')->references('id')->on('breeds');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tabel_kucing');
    }
}