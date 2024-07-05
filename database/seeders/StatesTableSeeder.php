<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 7,
                'name' => 'Carabobo',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 12,
                'name' => 'Lara',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1,
                'name' => 'Amazonas',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:55:57',
            ),
            3 => 
            array (
                'id' => 3,
                'name' => 'Apure',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:56:11',
            ),
            4 => 
            array (
                'id' => 2,
                'name' => 'Anzoátegui',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:56:18',
            ),
            5 => 
            array (
                'id' => 4,
                'name' => 'Aragua',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:56:26',
            ),
            6 => 
            array (
                'id' => 5,
                'name' => 'Barinas',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:56:42',
            ),
            7 => 
            array (
                'id' => 6,
                'name' => 'Bolívar',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:56:48',
            ),
            8 => 
            array (
                'id' => 8,
                'name' => 'Cojedes',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:56:54',
            ),
            9 => 
            array (
                'id' => 9,
                'name' => 'Delta Amacuro',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:57:00',
            ),
            10 => 
            array (
                'id' => 10,
                'name' => 'Falcón',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:57:05',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Mérida',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:57:11',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Miranda',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:57:16',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Monagas',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:57:28',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Nueva Esparta',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:57:34',
            ),
            15 => 
            array (
                'id' => 18,
                'name' => 'Sucre',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:57:41',
            ),
            16 => 
            array (
                'id' => 19,
                'name' => 'Táchira',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:57:47',
            ),
            17 => 
            array (
                'id' => 20,
                'name' => 'Trujillo',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:57:54',
            ),
            18 => 
            array (
                'id' => 21,
                'name' => 'Vargas',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:58:00',
            ),
            19 => 
            array (
                'id' => 22,
                'name' => 'Yaracuy',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:58:06',
            ),
            20 => 
            array (
                'id' => 23,
                'name' => 'Zulia',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:58:12',
            ),
            21 => 
            array (
                'id' => 24,
                'name' => 'Distrito Capital',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:58:24',
            ),
            22 => 
            array (
                'id' => 25,
                'name' => 'Dependencias Federales',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:58:31',
            ),
            23 => 
            array (
                'id' => 11,
                'name' => 'Guárico',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:58:37',
            ),
            24 => 
            array (
                'id' => 17,
                'name' => 'Portuguesa',
                'status' => 'I',
                'created_at' => NULL,
                'updated_at' => '2020-04-02 14:58:51',
            ),
        ));
        
        
    }
}