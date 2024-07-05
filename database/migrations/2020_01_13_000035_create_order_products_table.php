<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'order_products';

    /**
     * Run the migrations.
     * @table order_products
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
         
            $table->bigIncrements('id');
            $table->integer('cant')->default('1');
            $table->decimal('price', 20, 6);
            $table->decimal('total', 20, 6);
            $table->unsignedInteger('orders');
            $table->decimal('deduction', 20, 6)->nullable();
            $table->unsignedBigInteger('cod_combo')->nullable();
            $table->unsignedBigInteger('products_id');

            $table->index(["orders"], 'fk_det_pedido_pedido1_idx');

            $table->index(["cod_combo"], 'fk_det_pedido_combo1_idx');

            $table->index(["products_id"], 'fk_order_products_products1_idx');
            $table->timestamps();


            $table->foreign('orders', 'fk_det_pedido_pedido1_idx')
                ->references('id')->on('orders')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cod_combo', 'fk_det_pedido_combo1_idx')
                ->references('id')->on('packages')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('products_id', 'fk_order_products_products1_idx')
                ->references('id')->on('products')
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
