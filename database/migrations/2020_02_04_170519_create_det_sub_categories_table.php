<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $tableName = 'det_sub_categories';
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('products_id');
            $table->unsignedInteger('sub_categories_id');
            $table->timestamps();
            $table->index(["sub_categories_id"], 'fk_det_sub_categories_sub_categories1_idx');

            $table->index(["products_id"], 'fk_det_sub_categories_products1_idx');


            $table->foreign('products_id', 'fk_det_sub_categories_products1_idx')
                ->references('id')->on('products')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('sub_categories_id', 'fk_det_sub_categories_sub_categories1_idx')
                ->references('id')->on('sub_categories')
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
