<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixPackagesB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('det_product_packages', function (Blueprint $table) {
            $table->foreign('packages_id', 'fk_det_product_packages_packages1_idx')
            ->references('id')->on('packages')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        

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
