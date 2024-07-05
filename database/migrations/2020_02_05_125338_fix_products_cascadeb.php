<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixProductsCascadeb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('det_sub_categories', function (Blueprint $table) {
            $table->foreign('sub_categories_id', 'fk_det_sub_categories_products1_idx')
            ->references('id')->on('sub_categories')
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
