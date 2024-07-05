<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumndOrderAddres extends Migration
{
    public $tableName = 'order_address';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->tableName, function (Blueprint $table) {
            $table->string('zip_code')->nullable();
            $table->string('urb')->nullable();
            $table->string('sector')->nullable();
            $table->string('nro_home')->nullable();
            $table->text('reference_point')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
