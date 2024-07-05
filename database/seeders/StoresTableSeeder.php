<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stores')->delete();
        
        \DB::table('stores')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bio mañongo',
                'logo' => 'stores/January2020/ywe55AMXPeISpYs16h7P.jpg',
                'nro_tienda' => 1000004,
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => '2020-01-24 18:55:05',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Bio Parapal',
                'logo' => NULL,
                'nro_tienda' => 1000006,
                'status' => 'A',
                'created_at' => '2020-01-24 18:55:34',
                'updated_at' => '2020-01-24 18:55:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bio Santa Cecilia',
                'logo' => NULL,
                'nro_tienda' => 1000007,
                'status' => 'A',
                'created_at' => '2020-01-24 18:56:13',
                'updated_at' => '2020-01-24 18:56:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Bio Express la Granja',
                'logo' => NULL,
                'nro_tienda' => 1000014,
                'status' => 'A',
                'created_at' => '2020-01-24 18:56:34',
                'updated_at' => '2020-01-24 18:56:34',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bio Express el Bosque',
                'logo' => NULL,
                'nro_tienda' => 1000019,
                'status' => 'A',
                'created_at' => '2020-01-24 18:56:49',
                'updated_at' => '2020-01-24 18:56:49',
            ),
        ));
        
        
    }
}