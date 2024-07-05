<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeoplesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'peoples';

    /**
     * Run the migrations.
     * @table peoples
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('rif', 18);
            $table->string('name');
            $table->enum('sex', ['m', 'f', 'o'])->nullable()->comment('Masculino (m)
Femenino (f)
Otros (o)');
            $table->date('birthdate')->nullable();
            $table->char('phone', 12)->nullable();
            $table->unsignedInteger('cities_id');

            $table->index(["cities_id"], 'fk_persona_cities1_idx');
            $table->timestamps();


            $table->foreign('cities_id', 'fk_persona_cities1_idx')
                ->references('id')->on('cities')
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
