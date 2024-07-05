<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniqueDetProTax extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('det_product_taxes', function (Blueprint $table) {
            DB::unprepared("
            DELETE FROM det_product_taxes;
            ALTER TABLE det_product_taxes
            ADD UNIQUE (taxes_id, products_id)");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('det_product_taxes', function (Blueprint $table) {
            //
        });
    }
}
