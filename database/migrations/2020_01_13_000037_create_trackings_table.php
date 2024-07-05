<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'trackings';

    /**
     * Run the migrations.
     * @table trackings
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('description')->nullable();
            $table->unsignedInteger('orders_id');
            $table->unsignedBigInteger('orders_status_id');
            $table->unsignedBigInteger('users_id')->nulleable();
            $table->timestamps();

            $table->index(["users_id"], 'fk_trackings_users1_idx');

            $table->index(["orders_status_id"], 'fk_tacking_estatus_pedido1_idx');

            $table->index(["orders_id"], 'fk_tacking_pedido1_idx');


            $table->foreign('orders_id', 'fk_tacking_pedido1_idx')
                ->references('id')->on('orders')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('orders_status_id', 'fk_tacking_estatus_pedido1_idx')
                ->references('id')->on('orders_status')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('users_id', 'fk_trackings_users1_idx')
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
