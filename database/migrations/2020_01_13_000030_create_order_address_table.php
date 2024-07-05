<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderAddressTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'order_address';

    /**
     * Run the migrations.
     * @table order_address
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
           
            $table->bigIncrements('id');
            $table->unsignedInteger('cities_id');
            $table->text('address');
            $table->enum('status', ['A', 'I'])->default('A');
            $table->unsignedBigInteger('users_id');

            $table->index(["cities_id"], 'fk_direccion_pedido_parroquia1_idx');

            $table->index(["users_id"], 'fk_order_address_users1_idx');
            $table->timestamps();


            $table->foreign('cities_id', 'fk_direccion_pedido_parroquia1_idx')
                ->references('id')->on('cities')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('users_id', 'fk_order_address_users1_idx')
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
