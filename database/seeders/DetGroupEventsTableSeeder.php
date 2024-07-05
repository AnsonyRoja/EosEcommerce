<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DetGroupEventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('det_group_events')->delete();
        
        \DB::table('det_group_events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'groups_id' => 1,
                'events_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}