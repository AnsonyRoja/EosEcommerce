<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserVisitProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_visit_products')->delete();
        
        \DB::table('user_visit_products')->insert(array (
            0 => 
            array (
                'id' => 2,
                'products_id' => 1176,
                'users_id' => 16,
                'created_at' => '2020-04-13 16:32:55',
                'updated_at' => '2020-04-13 16:33:59',
            ),
            1 => 
            array (
                'id' => 4,
                'products_id' => 1177,
                'users_id' => 16,
                'created_at' => '2020-04-13 16:34:58',
                'updated_at' => '2020-04-13 16:35:01',
            ),
            2 => 
            array (
                'id' => 20,
                'products_id' => 1178,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:16:53',
                'updated_at' => '2020-04-16 20:16:53',
            ),
            3 => 
            array (
                'id' => 21,
                'products_id' => 1180,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:17:17',
                'updated_at' => '2020-04-16 20:17:17',
            ),
            4 => 
            array (
                'id' => 22,
                'products_id' => 1181,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:18:11',
                'updated_at' => '2020-04-16 20:18:14',
            ),
            5 => 
            array (
                'id' => 23,
                'products_id' => 1182,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:18:14',
                'updated_at' => '2020-04-16 20:18:14',
            ),
            6 => 
            array (
                'id' => 24,
                'products_id' => 1183,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:28:50',
                'updated_at' => '2020-04-16 20:28:57',
            ),
            7 => 
            array (
                'id' => 12,
                'products_id' => 1183,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:17:51',
                'updated_at' => '2020-04-16 11:20:24',
            ),
            8 => 
            array (
                'id' => 13,
                'products_id' => 1183,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:23:44',
                'updated_at' => '2020-04-16 11:27:22',
            ),
            9 => 
            array (
                'id' => 9,
                'products_id' => 1184,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:11:21',
                'updated_at' => '2020-04-16 11:27:51',
            ),
            10 => 
            array (
                'id' => 11,
                'products_id' => 1184,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:17:46',
                'updated_at' => '2020-04-16 11:27:57',
            ),
            11 => 
            array (
                'id' => 8,
                'products_id' => 1184,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:00:43',
                'updated_at' => '2020-04-16 11:30:00',
            ),
            12 => 
            array (
                'id' => 10,
                'products_id' => 1185,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:12:57',
                'updated_at' => '2020-04-16 17:17:52',
            ),
            13 => 
            array (
                'id' => 17,
                'products_id' => 1186,
                'users_id' => 20,
                'created_at' => '2020-04-16 17:40:32',
                'updated_at' => '2020-04-16 17:41:16',
            ),
            14 => 
            array (
                'id' => 31,
                'products_id' => 1069,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:55:30',
                'updated_at' => '2020-04-17 10:55:31',
            ),
            15 => 
            array (
                'id' => 7,
                'products_id' => 1169,
                'users_id' => 20,
                'created_at' => '2020-04-16 09:39:19',
                'updated_at' => '2020-04-16 17:41:19',
            ),
           
        ));
        
        
    }
}