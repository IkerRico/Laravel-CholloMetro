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
        Schema::create('ganga', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->text('description');
            $table->text('url');
            $table->bigInteger('category_id')->unsigned();
            $table->integer('likes');
            $table->integer('unlikes');
            $table->float('price');
            $table->float('price_sale');
            $table->boolean('aviable');
            $table->bigInteger('user_id')->unsigned();
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
        Schema::dropIfExists('ganga');
    }
};
