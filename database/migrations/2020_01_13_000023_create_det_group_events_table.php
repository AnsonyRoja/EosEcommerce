<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetGroupEventsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'det_group_events';

    /**
     * Run the migrations.
     * @table det_group_events
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            
            $table->increments('id');
            $table->unsignedInteger('groups_id');
            $table->unsignedInteger('events_id');

            $table->index(["groups_id"], 'fk_det_group_events_groups1_idx');

            $table->index(["events_id"], 'fk_det_group_events_events1_idx');
            $table->timestamps();


            $table->foreign('groups_id', 'fk_det_group_events_groups1_idx')
                ->references('id')->on('groups')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('events_id', 'fk_det_group_events_events1_idx')
                ->references('id')->on('events')
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
