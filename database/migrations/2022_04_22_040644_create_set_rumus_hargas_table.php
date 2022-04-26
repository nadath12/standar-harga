<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetRumusHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_rumus_hargas', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_ssh',['sbu','ssh','hspk','asb'])->default('ssh');
            $table->string('kode_belanja',255)->nullable();
            $table->string('var1',30)->nullable();
            $table->string('var2',30)->nullable();
            $table->string('var3',30)->nullable();
            $table->string('var4',30)->nullable();
            $table->string('var5',30)->nullable();
            $table->string('var6',30)->nullable();
            $table->string('var7',30)->nullable();
            $table->string('var8',30)->nullable();
            $table->string('var9',30)->nullable();
            $table->string('var10',30)->nullable();
            $table->string('formula',255)->nullable();
            $table->double('estimasi_harga',10,2);
            $table->text('keterangan');
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
        Schema::dropIfExists('set_rumus_hargas');
    }
}
