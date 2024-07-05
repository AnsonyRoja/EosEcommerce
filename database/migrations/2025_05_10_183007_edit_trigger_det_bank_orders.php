<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditTriggerDetBankOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::unprepared("
        CREATE OR REPLACE FUNCTION det_bank_orders()
RETURNS trigger AS
$$
DECLARE
    v_orders_status_id INTEGER:= (SELECT orders_status_id FROM trackings WHERE id=(SELECT MAX(t.id) FROM trackings t WHERE t.orders_id=NEW.orders_id));
    v_diferencia_aceptable FLOAT:= (SELECT other_amount FROM det_bank_orders WHERE orders_id=NEW.orders_id LIMIT 1);
    v_total_monto_aprobado_o_efectivo FLOAT := (SELECT SUM(amount)+v_diferencia_aceptable FROM det_bank_orders WHERE orders_id=NEW.orders_id and (status='aprobado' OR status='efectivo') GROUP BY orders_id);  
    v_total_a_pagar FLOAT:=(SELECT total_pay FROM orders WHERE id=NEW.orders_id);
BEGIN    
    IF NEW.status='aprobado' AND (v_total_monto_aprobado_o_efectivo>=v_total_a_pagar) THEN
        INSERT INTO trackings (description,orders_id,orders_status_id,users_id,created_at) VALUES (NEW.description,NEW.orders_id,4,NEW.users_id,NOW());
        UPDATE orders SET status='PR' WHERE orders.id=NEW.orders_id;
    END IF;
    IF NEW.status='rechazado' THEN
        INSERT INTO trackings (description,orders_id,orders_status_id,users_id,created_at) VALUES (NEW.description,NEW.orders_id,1,NEW.users_id,NOW());
    END IF;

    RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('det_bank_orders', function (Blueprint $table) {
            //
        });
    }
}
