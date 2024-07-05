<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class CalendarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('calendars')->delete();
        
        \DB::table('calendars')->insert(array (
            0 => 
            array (
                'id' => 1,
                'day' => '1',
                'hours_start' => '08:00',
                'hours_end' => '18:00',
                'status' => 'A',
                'created_at' => '2020-04-03 23:42:12',
                'updated_at' => '2020-04-03 23:42:12',
            ),
            1 => 
            array (
                'id' => 2,
                'day' => '2',
                'hours_start' => '08:00',
                'hours_end' => '18:00',
                'status' => 'A',
                'created_at' => '2020-04-03 23:42:31',
                'updated_at' => '2020-04-03 23:42:31',
            ),
            2 => 
            array (
                'id' => 3,
                'day' => '3',
                'hours_start' => '08:00',
                'hours_end' => '18:00',
                'status' => 'A',
                'created_at' => '2020-04-03 23:43:24',
                'updated_at' => '2020-04-03 23:43:24',
            ),
            3 => 
            array (
                'id' => 4,
                'day' => '4',
                'hours_start' => '08:00',
                'hours_end' => '18:00',
                'status' => 'A',
                'created_at' => '2020-04-03 23:43:45',
                'updated_at' => '2020-04-03 23:43:45',
            ),
            4 => 
            array (
                'id' => 5,
                'day' => '5',
                'hours_start' => '08:00',
                'hours_end' => '18:00',
                'status' => 'A',
                'created_at' => '2020-04-03 23:44:04',
                'updated_at' => '2020-04-03 23:44:04',
            ),
        ));
        
        
    }
}