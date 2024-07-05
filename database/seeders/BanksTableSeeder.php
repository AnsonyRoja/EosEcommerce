<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banks')->delete();
        
        \DB::table('banks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Banesco Banco Universal',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Banco de Venezuela',
                'status' => 'A',
                'created_at' => '2020-01-24 16:14:14',
                'updated_at' => '2020-01-24 16:14:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Efectivo',
                'status' => 'A',
                'created_at' => '2020-04-07 18:24:55',
                'updated_at' => '2020-04-07 18:24:55',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Banesco Panamá',
                'status' => 'A',
                'created_at' => '2020-04-08 16:31:15',
                'updated_at' => '2020-04-08 16:31:15',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bank of America',
                'status' => 'A',
                'created_at' => '2020-04-08 16:33:22',
                'updated_at' => '2020-04-08 16:33:22',
            ),
        ));
        
        
    }
}