<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'products';

    /**
     * Run the migrations.
     * @table products
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('description_short')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 20, 6);
            $table->integer('qty_avaliable')->nullable()->default('0');
            $table->integer('qty_sold')->nullable()->default('0');
            $table->integer('qty_view')->nullable()->default('0');
            $table->float('user_rating')->nullable()->default('0');
            $table->integer('qty_min')->nullable()->default('1')->comment('Cantidad minima de compra');
            $table->integer('qty_max')->nullable()->default('0')->comment('Cantidad maxima a vender si es 0 significa que es infinito');
            $table->string('keyword')->nullable();
            $table->enum('status', ['A', 'I'])->nullable()->default('A');
            $table->integer('EAN')->nullable()->comment('codigo de barras');
            $table->integer('sku')->nullable();
            $table->tinyInteger('promote')->nullable()->default('0');
            $table->decimal('discount', 20, 6)->nullable()->default('0');
            $table->string('photo', 200)->nullable();
            $table->string('mark_keyword')->nullable(); // Agrega esta línea
            $table->unsignedInteger('stores_id');
            $table->unsignedInteger('brands_id')->nullable();
            $table->unsignedInteger('sub_categories_id');
            $table->enum('is_combo', ['0', '1'])->nullable()->default('0');
            $table->index(["sub_categories_id"], 'fk_products_sub_categories1_idx');
            
            $table->index(["stores_id"], 'fk_products_stores1_idx');
            
            $table->index(["brands_id"], 'fk_products_brands1_idx');
            
            $table->unique(["EAN"], 'EAN_UNIQUE');
            $table->timestamps();
            
            
            $table->foreign('stores_id', 'fk_products_stores1_idx')
                ->references('id')->on('stores')
                ->onDelete('restrict')
                ->onUpdate('restrict');
                
                $table->foreign('brands_id', 'fk_products_brands1_idx')
                ->references('id')->on('brands')
                ->onDelete('restrict')
                ->onUpdate('restrict');
                
                $table->foreign('sub_categories_id', 'fk_products_sub_categories1_idx')
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
