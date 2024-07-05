<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetTransportCitiesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'det_transport_cities';

    /**
     * Run the migrations.
     * @table det_transport_cities
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transports_id');
            $table->unsignedInteger('cities_id');
            $table->enum('status', ['A', 'I'])->nullable()->default('A');

            $table->index(["transports_id"], 'fk_det_transporte_parroquia_transporte1_idx');

            $table->index(["cities_id"], 'fk_det_transporte_parroquia_parroquia1_idx');
            $table->timestamps();


            $table->foreign('transports_id', 'fk_det_transporte_parroquia_transporte1_idx')
                ->references('id')->on('transports')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cities_id', 'fk_det_transporte_parroquia_parroquia1_idx')
                ->references('id')->on('cities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
