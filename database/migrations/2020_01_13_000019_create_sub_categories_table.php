<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sub_categories';

    /**
     * Run the migrations.
     * @table sub_categories
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name', 45);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['A', 'I'])->nullable()->default('A');
            $table->unsignedInteger('categories_id');
            $table->integer('c_elementvalue_id_n4')->unsigned()->nullable()->default(null);
            $table->index(["categories_id"], 'fk_sub_categories_categories1_idx');
            $table->timestamps();


            $table->foreign('categories_id', 'fk_sub_categories_categories1_idx')
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
