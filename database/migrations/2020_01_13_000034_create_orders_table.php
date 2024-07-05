<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'orders';

    /**
     * Run the migrations.
     * @table orders
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
           
            $table->increments('id');
            $table->decimal('sub_total', 20, 2);
            $table->decimal('total_pay', 20, 2);
            $table->decimal('total_tax', 20, 2);
            $table->decimal('total_packaging', 20, 2)->nullable()->default('0');
            $table->decimal('total_transport', 20, 2)->nullable()->default('0');
            $table->unsignedBigInteger('order_address_id')->nullable();
            $table->enum('status', ['A', 'I'])->nullable()->default('A');
            $table->unsignedBigInteger('transports_id')->nullable();
            $table->unsignedTinyInteger('user_rating')->nullable()->default('0');
            $table->dateTime('delivery_time_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->decimal('discount', 20, 2)->nullable()->default('0')->comment('para los combos');
            $table->decimal('exento', 20, 2)->nullable()->default('0')->comment('exento de impuesto');
            $table->decimal('bi', 20, 2)->nullable()->default('0')->comment('base imponible');
            $table->unsignedBigInteger('packagings_id');
            $table->decimal('currency_rate', 20, 2)->nullable()->default('1');
            $table->string('opinion')->nullable()->comment('Comentario del usuario para calificando el pedido');
            $table->unsignedInteger('coins_id');
            $table->unsignedBigInteger('users_id')->nullable();
            $table->text('rate_json')->nullable();
            $table->index(["coins_id"], 'fk_orders_coins1_idx');

            $table->index(["order_address_id"], 'fk_pedido_direccion_pedido1_idx');

            $table->index(["packagings_id"], 'fk_pedido_embalaje1_idx');

            $table->index(["transports_id"], 'fk_pedido_transporte1_idx');
            $table->timestamps();


            $table->foreign('order_address_id', 'fk_pedido_direccion_pedido1_idx')
                ->references('id')->on('order_address')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('transports_id', 'fk_pedido_transporte1_idx')
                ->references('id')->on('transports')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('packagings_id', 'fk_pedido_embalaje1_idx')
                ->references('id')->on('packagings')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('coins_id', 'fk_orders_coins1_idx')
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
