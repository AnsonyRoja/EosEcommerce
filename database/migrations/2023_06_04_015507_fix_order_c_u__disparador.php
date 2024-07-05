<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixOrderCUDisparador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        DROP TRIGGER IF EXISTS orders ON orders;
        DROP FUNCTION IF EXISTS orders();

        CREATE OR REPLACE FUNCTION orders()
        RETURNS trigger AS
      $$
    DECLARE
			v_users_id INTEGER:=(SELECT users_id FROM orders WHERE id=NEW.id);
					
      BEGIN	
     
            IF NEW.status='SD' THEN
          		INSERT INTO trackings (description,orders_id,orders_status_id,users_id,created_at) VALUES (NEW.observacion,NEW.id,6,v_users_id,NOW());
			END IF;   
             IF NEW.status='ED' THEN
          		INSERT INTO trackings (description,orders_id,orders_status_id,users_id,created_at) VALUES (NEW.observacion,NEW.id,7,v_users_id,NOW());
			END IF;       
              IF NEW.status='EC' THEN
          		INSERT INTO trackings (description,orders_id,orders_status_id,users_id,created_at) VALUES (NEW.observacion,NEW.id,8,v_users_id,NOW());
			END IF;   
			IF NEW.status='RT' THEN
          		INSERT INTO trackings (description,orders_id,orders_status_id,users_id,created_at) VALUES (NEW.observacion,NEW.id,5,v_users_id,NOW());
			END IF;
			IF NEW.status='CO' THEN
          		INSERT INTO trackings (description,orders_id,orders_status_id,users_id,created_at) VALUES (NEW.observacion,NEW.id,12,v_users_id,NOW());
            END IF;    
            IF NEW.status='CU' THEN
                NEW.status:='CO';
                INSERT INTO trackings (description,orders_id,orders_status_id,users_id,created_at) VALUES (NEW.observacion,NEW.id,11,v_users_id,NOW());
            END IF;              
          RETURN NEW;
      END;
      $$
      LANGUAGE 'plpgsql';
      
      
      CREATE TRIGGER orders
        BEFORE UPDATE
        ON orders
        FOR EACH ROW
        EXECUTE PROCEDURE orders();      
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}
