<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'categories';

    /**
     * Run the migrations.
     * @table categories
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
         
            $table->increments('id');
            $table->string('name', 45);
            $table->text('description')->nullable();
            
            $table->string('image', 200)->nullable();
            $table->integer('parent_id')->unsigned()->nullable()->default(null);
            $table->tinyInteger('order')->nullable()->default('1');
            $table->string('slug')->nullable();
            $table->enum('status', ['A', 'I'])->nullable()->default('A');
            $table->integer('c_elementvalue_id_n3')->unsigned()->nullable()->default(null);
            $table->index(["parent_id"], 'fk_categories_categories1_idx');
            $table->timestamps();


            $table->foreign('parent_id', 'fk_categories_categories1_idx')
                ->references('id')->on('categories')
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





