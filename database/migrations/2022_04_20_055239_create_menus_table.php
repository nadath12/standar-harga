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
            $table->string('icon',50)->nullable();
            $table->string('menu_link',100);
            $table->text('menu_deskripsi')->nullable();
            $table->string('controller',20)->nullable();
            $table->string('function',30)->nullable();
            $table->string('input_type',50)->nullable();
            $table->integer('level')->default(0);
            $table->integer('menu_top_id')->default(0);
            $table->boolean('is_active')->default(true);
            $table->integer('urut')->default(0);
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
