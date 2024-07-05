<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE OR REPLACE FUNCTION rating()
        RETURNS trigger AS
      $$
      
      DECLARE
          actual_rating INTEGER := (SELECT (SUM(rating)+NEW.rating)/(COUNT(products_id)+1) FROM rating_products WHERE products_id=NEW.products_id GROUP BY products_id);
      BEGIN	
          UPDATE products SET user_rating=actual_rating WHERE id=NEW.products_id;
       
          RETURN NEW;
      END;
      $$
      LANGUAGE \'plpgsql\';
      
      CREATE TRIGGER rating_trigger
        AFTER INSERT
        ON rating_products
        FOR EACH ROW
        EXECUTE PROCEDURE rating();
        
      
        
      CREATE OR REPLACE FUNCTION rating_del()
        RETURNS trigger AS
      $$
      
      DECLARE
          actual_rating INTEGER := (SELECT (SUM(rating)-OLD.rating)/(COUNT(products_id)) FROM rating_products WHERE products_id=OLD.products_id GROUP BY products_id);
      BEGIN	
          UPDATE products SET user_rating=actual_rating WHERE id=OLD.products_id;
       
          RETURN NEW;
      END;
      $$
      LANGUAGE \'plpgsql\';
      
      CREATE TRIGGER rating_del_trigger
        AFTER DELETE
        ON rating_products
        FOR EACH ROW
        EXECUTE PROCEDURE rating_del();
      
      ------------------TRIGGER qty_avaliable:
      
      CREATE OR REPLACE FUNCTION restar_qty_avaliable()
        RETURNS trigger AS
      $$
      
      
      BEGIN	
          UPDATE products SET qty_avaliable=qty_avaliable-NEW.cant WHERE id=NEW.products_id;
       
          RETURN NEW;
      END;
      $$
      LANGUAGE \'plpgsql\';
      
      
      
      CREATE OR REPLACE FUNCTION sumar_qty_avaliable()
        RETURNS trigger AS
      $$
      
      
      BEGIN	
          UPDATE products SET qty_avaliable=qty_avaliable+OLD.cant WHERE id=OLD.products_id;
          RETURN NEW;
      END;
      $$
      LANGUAGE \'plpgsql\';
      
      CREATE OR REPLACE FUNCTION actualizar_qty_avaliable_and_qty_sold()
        RETURNS trigger AS
      $$
      
      BEGIN	
      IF NEW.orders_status_id=11 OR NEW.orders_status_id=12 OR NEW.orders_status_id=13 THEN
          UPDATE products SET qty_avaliable=qty_avaliable-o.cant FROM (SELECT op.products_id,op.cant FROM order_products op WHERE op.orders=NEW.orders_id) o WHERE id=o.products_id;
      END IF;
      IF NEW.orders_status_id=8 THEN
          UPDATE products SET qty_sold=qty_sold+o.cant FROM (SELECT op.products_id,op.cant FROM order_products op WHERE op.orders=NEW.orders_id) o WHERE id=o.products_id;
          UPDATE users SET purchase_quantity=purchase_quantity+1 WHERE id=(SELECT users_id FROM orders WHERE id=NEW.orders_id);
      END IF;
      
          RETURN NEW;
      END;
      $$
      LANGUAGE \'plpgsql\';
      
      CREATE OR REPLACE FUNCTION qty_view()
        RETURNS trigger AS
      $$
      
      BEGIN	
          UPDATE products SET qty_view=qty_view+1 WHERE id=NEW.products_id;
      
          RETURN NEW;
      END;
      $$
      LANGUAGE \'plpgsql\';
      
      CREATE TRIGGER actualizar_qty_avaliable_and_qty_sold
        AFTER UPDATE
        ON trackings
        FOR EACH ROW
        EXECUTE PROCEDURE actualizar_qty_avaliable_and_qty_sold();
        
      CREATE TRIGGER sumar_qty_avaliable
        AFTER DELETE
        ON order_products
        FOR EACH ROW
        EXECUTE PROCEDURE sumar_qty_avaliable();
        
      CREATE TRIGGER restar_qty_avaliable
        AFTER INSERT
        ON order_products
        FOR EACH ROW
        EXECUTE PROCEDURE restar_qty_avaliable();
        
      CREATE TRIGGER qty_view
        AFTER INSERT OR UPDATE
        ON user_visit_products
        FOR EACH ROW
        EXECUTE PROCEDURE qty_view();
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  //  public function down()
    //{
     //   DB::unprepared('DROP TRIGGER `tr_User_Default_Member_Role`');
   // }
}
