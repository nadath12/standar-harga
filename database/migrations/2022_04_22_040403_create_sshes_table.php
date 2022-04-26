<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSshesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sshes', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_ssh',['sbu','ssh','hspk','asb'])->default('ssh');
            $table->string('kategori_barang',255)->nullable();
            $table->double('estimasi_harga',10,2);
            $table->double('estimasi_harga_wil1',10,2);
            $table->double('estimasi_harga_wil2',10,2);
            $table->double('estimasi_harga_wil3',10,2);
            $table->double('estimasi_harga_wil4',10,2);
            $table->double('estimasi_harga_wil5',10,2);
            $table->text('keterangan');
            $table->integer('user_id');
            $table->integer('opd_pengusul_id');
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
        Schema::dropIfExists('sshes');
    }
}
