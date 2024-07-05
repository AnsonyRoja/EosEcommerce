<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders_status')->delete();
        
        \DB::table('orders_status')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Esperando el pago',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:51:56',
                'updated_at' => '2020-02-24 18:51:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Verificando su pago',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:12',
                'updated_at' => '2020-02-24 18:52:12',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Pago rechazado',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:23',
                'updated_at' => '2020-02-24 18:52:23',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Preparando su orden',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:29',
                'updated_at' => '2020-02-24 18:52:29',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Retirar en tienda',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:36',
                'updated_at' => '2020-02-24 18:52:36',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Entregado',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:53',
                'updated_at' => '2020-02-24 18:52:53',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'Devuelto',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:53',
                'updated_at' => '2020-02-24 18:52:53',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'Reenviado',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:53',
                'updated_at' => '2020-02-24 18:52:53',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'Cancelado por el usuario',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:53',
                'updated_at' => '2020-02-24 18:52:53',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'Cancelado por Biomercados',
                'description' => NULL,
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 6,
                'name' => 'Listo para enviar',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:45',
                'updated_at' => '2020-02-24 18:52:45',
            ),
            11 => 
            array (
                'id' => 7,
                'name' => 'Enviando',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:53',
                'updated_at' => '2020-02-24 18:52:53',
            ),
        ));
        
        
    }
}