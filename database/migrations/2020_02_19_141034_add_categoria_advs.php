<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriaAdvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('advs', function ($table) {

            $table->unsignedInteger('categories_id')->nullable();

            $table->index(["categories_id"], 'fk_advs_categories1_idx');
         
    
    
            $table->foreign('categories_id', 'fk_advs_categories1_idx')
                ->references('id')->on('categories')
                ->onDelete('set null')
                ->onUpdate('set null');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
