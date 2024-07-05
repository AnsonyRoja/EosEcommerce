<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvsStores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advs_stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('advs_id');
            $table->unsignedBigInteger('stores_id');
            $table->timestamps();

            $table->foreign('advs_id')->references('id')->on('advs')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('stores_id')->references('id')->on('stores')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advs_stores');
    }
}
