<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DetTaxTransportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('det_tax_transports')->delete();
        
        \DB::table('det_tax_transports')->insert(array (
            0 => 
            array (
                'id' => 1,
                'taxes_id' => 1,
                'transports_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}