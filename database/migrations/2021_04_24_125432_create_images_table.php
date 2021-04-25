<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("path");
            $table->unsignedBigInteger("user_id");
            //$table->unsignedBigInteger("service_id");
            //$table->unsignedBigInteger("request_id");
            //$table->unsignedBigInteger("test_id");
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            //$table->foreign('test_id')->references('id')->on('tests')->onDelete('restrict')->onUpdate('restrict');
            //$table->foreign('service_id')->references('id')->on('services')->onDelete('restrict')->onUpdate('restrict');
            //$table->foreign('request_id')->references('id')->on('requests')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
