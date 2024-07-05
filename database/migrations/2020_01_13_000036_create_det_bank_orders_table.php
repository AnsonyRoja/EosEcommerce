<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetBankOrdersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'det_bank_orders';

    /**
     * Run the migrations.
     * @table det_bank_orders
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {

            $table->increments('id');
            $table->decimal('amount', 20, 2)->nullable();
            $table->unsignedInteger('orders_id');
            $table->unsignedInteger('bank_datas_id');
            $table->string('status', 45)->nullable()->default('nuevo');
            $table->string('ref', 200)->nullable();
            $table->string('image', 250)->nullable();
            $table->index(["bank_datas_id"], 'fk_det_bank_orders_bank_datas1_idx');

            $table->index(["orders_id"], 'fk_det_bank_orders_orders1_idx');
            $table->timestamps();


            $table->foreign('orders_id', 'fk_det_bank_orders_orders1_idx')
                ->references('id')->on('orders')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('bank_datas_id', 'fk_det_bank_orders_bank_datas1_idx')
                ->references('id')->on('bank_datas')
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
