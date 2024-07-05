<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transports')->delete();
        
        \DB::table('transports')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Retirar en tienda',
                'description' => 'Debe esperar por lo menos 30 minutos antes de dirigirse a nuestra tienda Bio y retirar su pedido.',
                'price' => '0.000000',
                'time_minutes' => 30,
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => '2020-04-15 18:36:18',
                'peso_max' => '15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Así de Rápido',
                'description' => 'Despacho inmediato.',
                'price' => '150000.000000',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-01-24 16:11:50',
                'updated_at' => '2020-04-20 22:38:40',
                'peso_max' => '15',
            ),
        ));
        
        
    }
}