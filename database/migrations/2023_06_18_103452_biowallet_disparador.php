<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class BiowalletDisparador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        DROP TRIGGER IF EXISTS biowallets ON biowallets;
        DROP FUNCTION IF EXISTS biowallets();


        CREATE OR REPLACE FUNCTION biowallets()
                RETURNS trigger AS
              $$
              BEGIN	
			  IF(TG_OP='INSERT') THEN
			   IF(NEW.tipo='Aprobado') THEN
                  UPDATE users SET saldo=saldo+NEW.monto WHERE email=NEW.email;
              	END IF;  
			  END IF;

              IF(TG_OP='UPDATE') THEN	  
                IF(NEW.tipo='Aprobado' AND OLD.tipo='Nuevo') THEN
                    UPDATE users SET saldo=saldo+NEW.monto WHERE email=NEW.email;
                END IF;
                IF(NEW.tipo='Nuevo' AND OLD.tipo='Aprobado') THEN
                    UPDATE users SET saldo=saldo-NEW.monto WHERE email=NEW.email;
                END IF;
                IF(NEW.tipo='Rechazado' AND OLD.tipo='Aprobado') THEN
                    UPDATE users SET saldo=saldo-NEW.monto WHERE email=NEW.email;
                END IF;
		        END IF;
                RETURN NEW;
            END;
        $$
        LANGUAGE 'plpgsql';   
        
        CREATE TRIGGER biowallets
                AFTER INSERT OR UPDATE
                ON biowallets
                FOR EACH ROW
                EXECUTE PROCEDURE biowallets();                  
      ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('biowallets', function (Blueprint $table) {
            //
        });
    }
}
