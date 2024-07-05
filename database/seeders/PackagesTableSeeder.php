<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('packages')->delete();
        
        \DB::table('packages')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Cuidado personal',
                'discount' => '0.000000',
                'status' => 'A',
                'created_at' => '2020-01-30 12:40:20',
                'updated_at' => '2020-01-30 16:18:44',
                'image' => 'packages/January2020/GS30iezCLpYRIyJ3LHpo.jpg',
                'type' => 'IZ',
            ),
            1 => 
            array (
                'id' => 1,
                'name' => 'Pollo Bio',
                'discount' => '0.000000',
                'status' => 'A',
                'created_at' => '2020-01-30 12:37:32',
                'updated_at' => '2020-01-30 16:19:08',
                'image' => 'packages/January2020/s4rcd4W2sxMhXbM3RLCn.jpg',
                'type' => 'DT',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Carnes bio',
                'discount' => '0.000000',
                'status' => 'A',
                'created_at' => '2020-01-30 16:19:31',
                'updated_at' => '2020-01-30 16:19:31',
                'image' => 'packages/January2020/11ZzllHD77b4FJEgP2g3.jpg',
                'type' => 'DT',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Charcuteria bio',
                'discount' => '0.000000',
                'status' => 'A',
                'created_at' => '2020-01-30 16:19:55',
                'updated_at' => '2020-01-30 16:19:55',
                'image' => 'packages/January2020/zV1DMgFXiRTx6FZtYB0b.jpg',
                'type' => 'DT',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Perro caliente bio',
                'discount' => '0.000000',
                'status' => 'A',
                'created_at' => '2020-01-30 16:20:43',
                'updated_at' => '2020-01-30 16:20:43',
                'image' => 'packages/January2020/ULQ6khi6QTZPkjzbgSqV.jpg',
                'type' => 'DB',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Hamburguesa bio',
                'discount' => '0.000000',
                'status' => 'A',
                'created_at' => '2020-01-30 16:21:27',
                'updated_at' => '2020-02-06 05:56:37',
                'image' => 'packages/January2020/VWYdoKUzWb4eFadjDbEY.jpg',
                'type' => 'DB',
            ),
            6 => 
            array (
                'id' => 6,
                'name' => 'Pizza bio',
                'discount' => '0.000000',
                'status' => 'A',
                'created_at' => '2020-01-30 16:20:20',
                'updated_at' => '2020-02-06 06:06:39',
                'image' => 'packages/January2020/9kAnqpBCkwBsWBdXNnA9.jpg',
                'type' => 'DB',
            ),
            7 => 
            array (
                'id' => 3,
                'name' => 'Cesta Bio',
                'discount' => '0.000000',
                'status' => 'A',
                'created_at' => '2020-01-30 12:40:51',
                'updated_at' => '2020-02-06 06:16:49',
                'image' => 'packages/January2020/NDYlpbsBMkDUpCt1jJGj.jpg',
                'type' => 'IZ',
            ),
        ));
        
        
    }
}