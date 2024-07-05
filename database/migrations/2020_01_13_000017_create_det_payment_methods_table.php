<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetPaymentMethodsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'det_payment_methods';

    /**
     * Run the migrations.
     * @table det_payment_methods
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
         
            $table->increments('id');
            $table->unsignedInteger('payment_methods_id');
            $table->unsignedInteger('coins_id');

            $table->index(["payment_methods_id"], 'fk_det_metodo_pago_moneda_payment_methods1_idx');

            $table->index(["coins_id"], 'fk_det_metodo_pago_moneda_coins1_idx');


            $table->foreign('payment_methods_id', 'fk_det_metodo_pago_moneda_payment_methods1_idx')
                ->references('id')->on('payment_methods')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('coins_id', 'fk_det_metodo_pago_moneda_coins1_idx')
                ->references('id')->on('coins')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
