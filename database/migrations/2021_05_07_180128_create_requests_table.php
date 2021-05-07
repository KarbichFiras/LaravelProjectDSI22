<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 50);
            $table->text('description');
            $table->dateTime('deadeline', $precision = 0);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            // ilyes

            
            $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('restrict')->onUpdate('restrict');
            // ilyes
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Requests');
    }
}
