<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RatingProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rating_products')->delete();
        
        
        
    }
}