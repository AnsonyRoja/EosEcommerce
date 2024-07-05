<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeoplesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('peoples')->delete();
        
        \DB::table('peoples')->insert(array (
            0 => 
            array (
                'id' => 3,
                'rif' => 'V-18671985',
                'name' => 'Francisco suares',
                'sex' => 'f',
                'birthdate' => '1988-07-20',
                'phone' => '04145138790 ',
                'cities_id' => 722,
                'created_at' => '2020-02-23 19:46:07',
                'updated_at' => '2020-02-23 21:45:40',
                'phone_home' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'rif' => 'V-18671986',
                'name' => 'Leonardo melendez',
                'sex' => 'm',
                'birthdate' => '2010-07-20',
                'phone' => '04145138790 ',
                'cities_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'phone_home' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'rif' => 'V-18671985',
                'name' => 'maria',
                'sex' => 'm',
                'birthdate' => '1982-06-10',
                'phone' => '04145138790 ',
                'cities_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'phone_home' => NULL,
            ),
        ));
        
        
    }
}