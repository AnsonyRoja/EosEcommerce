<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingProductsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'rating_products';

    /**
     * Run the migrations.
     * @table rating_products
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
           
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('rating')->default('0');
            $table->string('opinion')->nullable();
            $table->unsignedBigInteger('products_id');
            $table->unsignedBigInteger('users_id');

            $table->index(["users_id"], 'fk_rating_products_users1_idx');

            $table->index(["products_id"], 'fk_rating_products_products1_idx');
            $table->timestamps();


            $table->foreign('products_id', 'fk_rating_products_products1_idx')
                ->references('id')->on('products')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('users_id', 'fk_rating_products_users1_idx')
                ->references('id')->on('users')
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
