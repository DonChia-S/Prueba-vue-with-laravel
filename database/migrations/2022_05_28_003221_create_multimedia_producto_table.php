<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultimediaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedia_producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('multimedia_id');
            $table->unsignedBigInteger('producto_id');
            $table->timestamps();
            $table->foreign('multimedia_id')->references('id')->on('multimedias')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('multimedia_producto');
    }
}
