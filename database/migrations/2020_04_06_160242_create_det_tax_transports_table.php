<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetTaxTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_tax_transports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('taxes_id');
            $table->unsignedBigInteger('transports_id');

            $table->index(["transports_id"], 'fk_det_transport_taxes_transports1_idx');
            $table->index(["taxes_id"], 'fk_det_transport_taxes_taxes1_idx');


            $table->foreign('taxes_id', 'fk_det_transport_taxes_taxes1_idx')
                ->references('id')->on('taxes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('transports_id', 'fk_det_transport_taxes_transports1_idx')
                ->references('id')->on('transports')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('det_tax_transports');
    }
}
