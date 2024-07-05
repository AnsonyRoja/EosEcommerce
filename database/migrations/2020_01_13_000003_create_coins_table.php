<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'coins';

    /**
     * Run the migrations.
     * @table coins
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name', 45);
            $table->string('symbol', 10);
            $table->enum('status', ['A', 'I'])->nullable()->default('A');
            $table->decimal('rate', 20, 6)->nullable()->default('1');
            $table->unsignedInteger('coins_id')->nullable()->comment('Moneda base, sugerida por jorge');

            $table->index(["coins_id"], 'fk_coins_coins1_idx');
            $table->timestamps();


            $table->foreign('coins_id', 'fk_coins_coins1_idx')
                ->references('id')->on('coins')
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
