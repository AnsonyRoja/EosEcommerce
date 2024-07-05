<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrderAddressTable1 extends Migration
{
    public function up()
    {
        Schema::table('order_address', function (Blueprint $table) {
            // Establecer el valor inicial del autoincremento en 6
            DB::statement('ALTER TABLE order_address AUTO_INCREMENT = 6');
        });
    }

    public function down()
    {
        // No es necesario revertir esta migración
    }
}
