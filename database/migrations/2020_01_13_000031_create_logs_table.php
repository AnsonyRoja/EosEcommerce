<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'logs';

    /**
     * Run the migrations.
     * @table logs
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
         
            $table->bigIncrements('id');
            $table->string('ip', 18)->nullable();
            $table->text('description')->nullable();
            $table->string('type', 50)->nullable()->comment('El tipo puede definir si es un error o un movimiento del usuario, ejemplo para saber si un usuario modifico un producto');
            $table->unsignedBigInteger('users_id');

            $table->index(["users_id"], 'fk_logs_users1_idx');
            $table->timestamps();


            $table->foreign('users_id', 'fk_logs_users1_idx')
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
