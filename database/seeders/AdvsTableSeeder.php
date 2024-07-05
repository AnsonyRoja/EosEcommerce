<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class AdvsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('advs')->delete();
        
        \DB::table('advs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'advs\\April2020\\qSzHqKYdnJ96nnLrjXm0.jpg',
                'order' => NULL,
                'type' => 'top',
                'created_at' => '2020-04-17 23:07:38',
                'updated_at' => '2020-04-17 23:07:38',
                'status' => 'A',
                'url' => NULL,
                'categories_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'advs\\April2020\\PAyg1eqCcxtNtR6DXYad.jpg',
                'order' => NULL,
                'type' => 'medio_bajo',
                'created_at' => '2020-04-17 23:08:06',
                'updated_at' => '2020-04-17 23:08:44',
                'status' => 'A',
                'url' => NULL,
                'categories_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'advs\\April2020\\P4Lg4BJ9Xo0Vfq2G2bxL.jpg',
                'order' => NULL,
                'type' => 'footer',
                'created_at' => '2020-04-17 23:09:22',
                'updated_at' => '2020-04-17 23:09:22',
                'status' => 'A',
                'url' => NULL,
                'categories_id' => NULL,
            ),
        ));
        
        
    }
}