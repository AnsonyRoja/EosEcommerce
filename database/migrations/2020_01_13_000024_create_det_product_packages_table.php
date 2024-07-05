<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetProductPackagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'det_product_packages';

    /**
     * Run the migrations.
     * @table det_product_packages
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->integer('cant')->nullable();
            $table->unsignedBigInteger('packages_id');
            $table->unsignedBigInteger('products_id');

            $table->index(["packages_id"], 'fk_det_product_packages_packages1_idx');

            $table->index(["products_id"], 'fk_det_product_packages_products1_idx');


            $table->foreign('packages_id', 'fk_det_product_packages_packages1_idx')
                ->references('id')->on('packages')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('products_id', 'fk_det_product_packages_products1_idx')
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
