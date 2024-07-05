<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiowalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biowallets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('monto', 20, 2);
            $table->string('tipo')->nullable()->default('Nuevo');
            $table->string('email');
            $table->text('observacion')->nullable();
            $table->unsignedBigInteger('orders_id')->nullable();
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
        Schema::dropIfExists('biowallets');
    }
}
