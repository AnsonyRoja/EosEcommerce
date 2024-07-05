<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Administrador',
                'created_at' => '2020-01-23 18:20:44',
                'updated_at' => '2020-01-23 18:20:44',
            ),
            1 => 
            array (
                'id' => 1,
                'name' => 'Super Usuario',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-23 18:21:58',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'admin',
                'created_at' => '2020-01-23 19:54:58',
                'updated_at' => '2020-01-23 19:54:58',
            ),
        ));
        
        
    }
}