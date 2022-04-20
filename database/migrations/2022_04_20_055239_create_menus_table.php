<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu_name',50);
            $table->string('icon',50);
            $table->text('menu_link');
            $table->text('menu_deskripsi');
            $table->string('controller',20);
            $table->string('function',30);
            $table->string('input_type',50);
            $table->integer('level');
            $table->integer('menu_top_id');
            $table->boolean('is_active');
            $table->integer('urut');
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
        Schema::dropIfExists('menus');
    }
}
