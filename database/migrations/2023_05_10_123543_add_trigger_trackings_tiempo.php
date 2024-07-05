<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTriggerTrackingsTiempo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trackings', function (Blueprint $table) {
            DB::unprepared("
            CREATE OR REPLACE FUNCTION tiempo_tracking()
            RETURNS trigger AS
          $$
          
          BEGIN	
              NEW.updated_at=NOW();
              NEW.tiempo_min=(SELECT coalesce((date_part('MINUTES',(NOW()-t.updated_at))+(date_part('HOURS',(NOW()-t.updated_at))*60)+date_part('DAYS',(NOW()-t.updated_at))*1440),0) AS tiempo FROM (SELECT updated_at FROM trackings WHERE id=(SELECT MAX(t.id) FROM trackings t WHERE orders_id=NEW.orders_id)) t);
              RETURN NEW;
          END;
           $$
          LANGUAGE 'plpgsql';
          
          CREATE TRIGGER tiempo_tracking
            BEFORE INSERT
            ON trackings
            FOR EACH ROW
            EXECUTE PROCEDURE tiempo_tracking();                 
            ");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trackings', function (Blueprint $table) {
            //
        });
    }
}
