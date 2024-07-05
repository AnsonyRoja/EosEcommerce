<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetProductTaxesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'det_product_taxes';

    /**
     * Run the migrations.
     * @table det_product_taxes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            
            $table->increments('id');
            $table->decimal('total', 20, 6);
            $table->unsignedInteger('taxes_id');
            $table->unsignedBigInteger('products_id');

            $table->index(["products_id"], 'fk_det_product_taxes_products1_idx');

            $table->index(["taxes_id"], 'fk_det_product_taxes_taxes1_idx');


            $table->foreign('taxes_id', 'fk_det_product_taxes_taxes1_idx')
                ->references('id')->on('taxes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('products_id', 'fk_det_product_taxes_products1_idx')
                ->references('id')->on('products')
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
       Schema::dropIfExists($this->tableName);
     }
}
