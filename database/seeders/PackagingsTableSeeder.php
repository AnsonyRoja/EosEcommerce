<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackagingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('packagings')->delete();
        
        \DB::table('packagings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bolsas',
                'value' => '0.000000',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => '2020-04-07 18:24:00',
            ),
        ));
        
        
    }
}