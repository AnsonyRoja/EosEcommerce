<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ViewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('views')->delete();
        
        \DB::table('views')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'producto',
                'public_name' => 'Producto',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}