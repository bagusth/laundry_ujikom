<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('id_outlet');
            $table->string('kode_invoice',255);
            $table->integer('id_member');
            $table->dateTime('tgl',0);
            $table->dateTime('batas_waktu',0);
            $table->dateTime('tgl_bayar',0);
            $table->integer('biaya_tambahan');
            $table->double('diskon',8,2);
            $table->integer('pajak');
            $table->enum('status',['baru','proses','selesai','diambil']);
            $table->enum('dibayar',['dibayar','belum_dibayar']);
            $table->integer('id_user');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_transaksi');
    }
}
