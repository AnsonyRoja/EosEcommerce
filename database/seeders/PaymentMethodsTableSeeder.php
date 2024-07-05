<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_methods')->delete();
        
        \DB::table('payment_methods')->insert(array (
            0 => 
            array (
                'id' => 6,
                'name' => 'Paypal',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'I',
                'created_at' => '2020-02-26 14:22:12',
                'updated_at' => '2020-04-05 03:15:05',
                'image' => 'payment-methods\\February2020\\4Ql6Ydzu0zWOFc5Jee4a.png',
            ),
            1 => 
            array (
                'id' => 9,
                'name' => 'PagoDólar',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'I',
                'created_at' => '2020-04-05 03:20:33',
                'updated_at' => '2020-04-07 16:35:18',
                'image' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Criptomonedas',
                'description' => 'Entre 1 hora a 2 horas para verificar su pago',
                'time_minutes' => 0,
                'status' => 'I',
                'created_at' => '2020-02-26 14:22:28',
                'updated_at' => '2020-04-07 16:36:31',
                'image' => 'payment-methods\\February2020\\C2bNmODH1sMKxhuexeYA.png',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Biowallet',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'I',
                'created_at' => '2020-02-26 14:21:57',
                'updated_at' => '2020-04-07 16:36:42',
                'image' => 'payment-methods\\February2020\\hrBIcjzZFLRBuGzPqabX.jpg',
            ),
            4 => 
            array (
                'id' => 1,
                'name' => 'Transferencia Bancaria',
                'description' => 'Aprox. 1 hora para verificar su pago',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => '2020-04-05 03:19:58',
                'image' => 'payment-methods\\February2020\\zOUo6uzCnFkmXPcnne7Z.png',
            ),
            5 => 
            array (
                'id' => 2,
                'name' => 'Pago móvil',
                'description' => 'Aprox. 1 hora para verificar su pago',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-01-24 16:06:31',
                'updated_at' => '2020-04-05 03:19:00',
                'image' => 'payment-methods\\February2020\\YV0sIBxw3ubGugiUkOIa.png',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Tarjeta de crédito',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'I',
                'created_at' => '2020-01-24 16:07:00',
                'updated_at' => '2020-04-07 16:36:00',
                'image' => 'payment-methods\\February2020\\0aVqh8jHBRozqNV3kwv2.png',
            ),
            7 => 
            array (
                'id' => 4,
                'name' => 'Transferencia Zelle',
                'description' => 'Entre 1 hora a 2 horas para verificar su pago',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-01-24 16:08:02',
                'updated_at' => '2020-04-08 16:32:11',
                'image' => 'payment-methods\\February2020\\AgSYpWc1AF4zCkLevQCx.png',
            ),
            8 => 
            array (
                'id' => 3,
                'name' => 'Efectivo',
                'description' => 'Paga en casa o en nuestra tienda Bio',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-04-05 03:13:54',
                'updated_at' => '2020-04-17 13:45:31',
                'image' => NULL,
            ),
        ));
        
        
    }
}