<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Usuario normal',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-23 18:31:08',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'administrador',
                'display_name' => 'Maestro',
                'created_at' => '2020-01-23 18:30:17',
                'updated_at' => '2020-04-29 18:20:48',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'diseñador',
                'display_name' => 'Ecommerce',
                'created_at' => '2020-04-14 12:48:37',
                'updated_at' => '2020-04-29 18:21:39',
            ),
            3 => 
            array (
                'id' => 1,
                'name' => 'super',
                'display_name' => 'Sistemas',
                'created_at' => '2020-01-14 15:06:25',
                'updated_at' => '2020-04-29 18:29:56',
            ),
        ));
        
        
    }
}