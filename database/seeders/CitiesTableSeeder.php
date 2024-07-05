<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Alto Orinoco',
                'status' => 'A',
                'regions_id' => 2,
                'created_at' => NULL,
                'updated_at' => '2020-01-24 12:59:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Huachamacare Acanaña',
                'status' => 'A',
                'regions_id' => 2,
                'created_at' => '2020-01-24 12:59:57',
                'updated_at' => '2020-01-24 13:00:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Marawaka Toky Shamanaña',
                'status' => 'A',
                'regions_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mavaka Mavaka',
                'status' => 'A',
                'regions_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Sierra Parima Parimabé',
                'status' => 'A',
                'regions_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Ucata Laja Lisa',
                'status' => 'A',
                'regions_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Yapacana Macuruco',
                'status' => 'A',
                'regions_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Caname Guarinuma',
                'status' => 'A',
                'regions_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Fernando Girón Tovar',
                'status' => 'A',
                'regions_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Luis Alberto Gómez',
                'status' => 'A',
                'regions_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Pahueña Limón de Parhueña',
                'status' => 'A',
                'regions_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Platanillal Platanillal',
                'status' => 'A',
                'regions_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Samariapo',
                'status' => 'A',
                'regions_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Sipapo',
                'status' => 'A',
                'regions_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Munduapo',
                'status' => 'A',
                'regions_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Guayapo',
                'status' => 'A',
                'regions_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Alto Ventuari',
                'status' => 'A',
                'regions_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Medio Ventuari',
                'status' => 'A',
                'regions_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Bajo Ventuari',
                'status' => 'A',
                'regions_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Victorino',
                'status' => 'A',
                'regions_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Comunidad',
                'status' => 'A',
                'regions_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Casiquiare',
                'status' => 'A',
                'regions_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Cocuy',
                'status' => 'A',
                'regions_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'San Carlos de Río Negro',
                'status' => 'A',
                'regions_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Solano',
                'status' => 'A',
                'regions_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Anaco',
                'status' => 'A',
                'regions_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'San Joaquín',
                'status' => 'A',
                'regions_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Cachipo',
                'status' => 'A',
                'regions_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Aragua de Barcelona',
                'status' => 'A',
                'regions_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Lechería',
                'status' => 'A',
                'regions_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'El Morro',
                'status' => 'A',
                'regions_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Puerto Píritu',
                'status' => 'A',
                'regions_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'San Miguel',
                'status' => 'A',
                'regions_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Sucre',
                'status' => 'A',
                'regions_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Valle de Guanape',
                'status' => 'A',
                'regions_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Santa Bárbara',
                'status' => 'A',
                'regions_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'El Chaparro',
                'status' => 'A',
                'regions_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Tomás Alfaro',
                'status' => 'A',
                'regions_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Calatrava',
                'status' => 'A',
                'regions_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Guanta',
                'status' => 'A',
                'regions_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Chorrerón',
                'status' => 'A',
                'regions_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Mamo',
                'status' => 'A',
                'regions_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Soledad',
                'status' => 'A',
                'regions_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Mapire',
                'status' => 'A',
                'regions_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Piar',
                'status' => 'A',
                'regions_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Santa Clara',
                'status' => 'A',
                'regions_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'San Diego de Cabrutica',
                'status' => 'A',
                'regions_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Uverito',
                'status' => 'A',
                'regions_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Zuata',
                'status' => 'A',
                'regions_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Puerto La Cruz',
                'status' => 'A',
                'regions_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Pozuelos',
                'status' => 'A',
                'regions_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Onoto',
                'status' => 'A',
                'regions_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'San Pablo',
                'status' => 'A',
                'regions_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'San Mateo',
                'status' => 'A',
                'regions_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'El Carito',
                'status' => 'A',
                'regions_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Santa Inés',
                'status' => 'A',
                'regions_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'La Romereña',
                'status' => 'A',
                'regions_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Atapirire',
                'status' => 'A',
                'regions_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Boca del Pao',
                'status' => 'A',
                'regions_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'El Pao',
                'status' => 'A',
                'regions_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Pariaguán',
                'status' => 'A',
                'regions_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Cantaura',
                'status' => 'A',
                'regions_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Libertador',
                'status' => 'A',
                'regions_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Santa Rosa',
                'status' => 'A',
                'regions_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Urica',
                'status' => 'A',
                'regions_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Píritu',
                'status' => 'A',
                'regions_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'San Francisco',
                'status' => 'A',
                'regions_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'San José de Guanipa',
                'status' => 'A',
                'regions_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Boca de Uchire',
                'status' => 'A',
                'regions_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Boca de Chávez',
                'status' => 'A',
                'regions_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Pueblo Nuevo',
                'status' => 'A',
                'regions_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Santa Ana',
                'status' => 'A',
                'regions_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Bergatín',
                'status' => 'A',
                'regions_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Caigua',
                'status' => 'A',
                'regions_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'El Carmen',
                'status' => 'A',
                'regions_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'El Pilar',
                'status' => 'A',
                'regions_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Naricual',
                'status' => 'A',
                'regions_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'San Crsitóbal',
                'status' => 'A',
                'regions_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Edmundo Barrios',
                'status' => 'A',
                'regions_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Miguel Otero Silva',
                'status' => 'A',
                'regions_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Achaguas',
                'status' => 'A',
                'regions_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Apurito',
                'status' => 'A',
                'regions_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'El Yagual',
                'status' => 'A',
                'regions_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Guachara',
                'status' => 'A',
                'regions_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Mucuritas',
                'status' => 'A',
                'regions_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Queseras del medio',
                'status' => 'A',
                'regions_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Biruaca',
                'status' => 'A',
                'regions_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Bruzual',
                'status' => 'A',
                'regions_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Mantecal',
                'status' => 'A',
                'regions_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Quintero',
                'status' => 'A',
                'regions_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Rincón Hondo',
                'status' => 'A',
                'regions_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'San Vicente',
                'status' => 'A',
                'regions_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Guasdualito',
                'status' => 'A',
                'regions_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Aramendi',
                'status' => 'A',
                'regions_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'El Amparo',
                'status' => 'A',
                'regions_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'San Camilo',
                'status' => 'A',
                'regions_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Urdaneta',
                'status' => 'A',
                'regions_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'San Juan de Payara',
                'status' => 'A',
                'regions_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Codazzi',
                'status' => 'A',
                'regions_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Cunaviche',
                'status' => 'A',
                'regions_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Elorza',
                'status' => 'A',
                'regions_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'La Trinidad',
                'status' => 'A',
                'regions_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'San Fernando',
                'status' => 'A',
                'regions_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'El Recreo',
                'status' => 'A',
                'regions_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Peñalver',
                'status' => 'A',
                'regions_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'San Rafael de Atamaica',
                'status' => 'A',
                'regions_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Pedro José Ovalles',
                'status' => 'A',
                'regions_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Joaquín Crespo',
                'status' => 'A',
                'regions_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'José Casanova Godoy',
                'status' => 'A',
                'regions_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Madre María de San José',
                'status' => 'A',
                'regions_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Andrés Eloy Blanco',
                'status' => 'A',
                'regions_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Los Tacarigua',
                'status' => 'A',
                'regions_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Las Delicias',
                'status' => 'A',
                'regions_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Choroní',
                'status' => 'A',
                'regions_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Bolívar',
                'status' => 'A',
                'regions_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Camatagua',
                'status' => 'A',
                'regions_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Carmen de Cura',
                'status' => 'A',
                'regions_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Santa Rita',
                'status' => 'A',
                'regions_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Francisco de Miranda',
                'status' => 'A',
                'regions_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Moseñor Feliciano González',
                'status' => 'A',
                'regions_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Santa Cruz',
                'status' => 'A',
                'regions_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'José Félix Ribas',
                'status' => 'A',
                'regions_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Castor Nieves Ríos',
                'status' => 'A',
                'regions_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Las Guacamayas',
                'status' => 'A',
                'regions_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Pao de Zárate',
                'status' => 'A',
                'regions_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Zuata',
                'status' => 'A',
                'regions_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'José Rafael Revenga',
                'status' => 'A',
                'regions_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Palo Negro',
                'status' => 'A',
                'regions_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'San Martín de Porres',
                'status' => 'A',
                'regions_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'El Limón',
                'status' => 'A',
                'regions_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Caña de Azúcar',
                'status' => 'A',
                'regions_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Ocumare de la Costa',
                'status' => 'A',
                'regions_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'San Casimiro',
                'status' => 'A',
                'regions_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Güiripa',
                'status' => 'A',
                'regions_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Ollas de Caramacate',
                'status' => 'A',
                'regions_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Valle Morín',
                'status' => 'A',
                'regions_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'San Sebastían',
                'status' => 'A',
                'regions_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Turmero',
                'status' => 'A',
                'regions_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Arevalo Aponte',
                'status' => 'A',
                'regions_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Chuao',
                'status' => 'A',
                'regions_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Samán de Güere',
                'status' => 'A',
                'regions_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Alfredo Pacheco Miranda',
                'status' => 'A',
                'regions_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Santos Michelena',
                'status' => 'A',
                'regions_id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Tiara',
                'status' => 'A',
                'regions_id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Cagua',
                'status' => 'A',
                'regions_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Bella Vista',
                'status' => 'A',
                'regions_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Tovar',
                'status' => 'A',
                'regions_id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Urdaneta',
                'status' => 'A',
                'regions_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Las Peñitas',
                'status' => 'A',
                'regions_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'San Francisco de Cara',
                'status' => 'A',
                'regions_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Taguay',
                'status' => 'A',
                'regions_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Zamora',
                'status' => 'A',
                'regions_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Magdaleno',
                'status' => 'A',
                'regions_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'San Francisco de Asís',
                'status' => 'A',
                'regions_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Valles de Tucutunemo',
                'status' => 'A',
                'regions_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Augusto Mijares',
                'status' => 'A',
                'regions_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Sabaneta',
                'status' => 'A',
                'regions_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Juan Antonio Rodríguez Domínguez',
                'status' => 'A',
                'regions_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'El Cantón',
                'status' => 'A',
                'regions_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Santa Cruz de Guacas',
                'status' => 'A',
                'regions_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Puerto Vivas',
                'status' => 'A',
                'regions_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Ticoporo',
                'status' => 'A',
                'regions_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Nicolás Pulido',
                'status' => 'A',
                'regions_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Andrés Bello',
                'status' => 'A',
                'regions_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Arismendi',
                'status' => 'A',
                'regions_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Guadarrama',
                'status' => 'A',
                'regions_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'La Unión',
                'status' => 'A',
                'regions_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'San Antonio',
                'status' => 'A',
                'regions_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Barinas',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Alberto Arvelo Larriva',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'San Silvestre',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Santa Inés',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Santa Lucía',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Torumos',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'El Carmen',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Rómulo Betancourt',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Corazón de Jesús',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Ramón Ignacio Méndez',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Alto Barinas',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Manuel Palacio Fajardo',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Juan Antonio Rodríguez Domínguez',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Dominga Ortiz de Páez',
                'status' => 'A',
                'regions_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Barinitas',
                'status' => 'A',
                'regions_id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Altamira de Cáceres',
                'status' => 'A',
                'regions_id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Calderas',
                'status' => 'A',
                'regions_id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Barrancas',
                'status' => 'A',
                'regions_id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'El Socorro',
                'status' => 'A',
                'regions_id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Mazparrito',
                'status' => 'A',
                'regions_id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Santa Bárbara',
                'status' => 'A',
                'regions_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Pedro Briceño Méndez',
                'status' => 'A',
                'regions_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Ramón Ignacio Méndez',
                'status' => 'A',
                'regions_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'José Ignacio del Pumar',
                'status' => 'A',
                'regions_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Obispos',
                'status' => 'A',
                'regions_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Guasimitos',
                'status' => 'A',
                'regions_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'El Real',
                'status' => 'A',
                'regions_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'La Luz',
                'status' => 'A',
                'regions_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Ciudad Bolívia',
                'status' => 'A',
                'regions_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'José Ignacio Briceño',
                'status' => 'A',
                'regions_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'José Félix Ribas',
                'status' => 'A',
                'regions_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Páez',
                'status' => 'A',
                'regions_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Libertad',
                'status' => 'A',
                'regions_id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Dolores',
                'status' => 'A',
                'regions_id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Santa Rosa',
                'status' => 'A',
                'regions_id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Palacio Fajardo',
                'status' => 'A',
                'regions_id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Ciudad de Nutrias',
                'status' => 'A',
                'regions_id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'El Regalo',
                'status' => 'A',
                'regions_id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Puerto Nutrias',
                'status' => 'A',
                'regions_id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Santa Catalina',
                'status' => 'A',
                'regions_id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Cachamay',
                'status' => 'A',
                'regions_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Chirica',
                'status' => 'A',
                'regions_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Dalla Costa',
                'status' => 'A',
                'regions_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Once de Abril',
                'status' => 'A',
                'regions_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Simón Bolívar',
                'status' => 'A',
                'regions_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Unare',
                'status' => 'A',
                'regions_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Universidad',
                'status' => 'A',
                'regions_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Vista al Sol',
                'status' => 'A',
                'regions_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Pozo Verde',
                'status' => 'A',
                'regions_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Yocoima',
                'status' => 'A',
                'regions_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'name' => '5 de Julio',
                'status' => 'A',
                'regions_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Cedeño',
                'status' => 'A',
                'regions_id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Altagracia',
                'status' => 'A',
                'regions_id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Ascensión Farreras',
                'status' => 'A',
                'regions_id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Guaniamo',
                'status' => 'A',
                'regions_id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'La Urbana',
                'status' => 'A',
                'regions_id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Pijiguaos',
                'status' => 'A',
                'regions_id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'El Callao',
                'status' => 'A',
                'regions_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Gran Sabana',
                'status' => 'A',
                'regions_id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Ikabarú',
                'status' => 'A',
                'regions_id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Catedral',
                'status' => 'A',
                'regions_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Zea',
                'status' => 'A',
                'regions_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Orinoco',
                'status' => 'A',
                'regions_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'José Antonio Páez',
                'status' => 'A',
                'regions_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Marhuanta',
                'status' => 'A',
                'regions_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Agua Salada',
                'status' => 'A',
                'regions_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Vista Hermosa',
                'status' => 'A',
                'regions_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'La Sabanita',
                'status' => 'A',
                'regions_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Panapana',
                'status' => 'A',
                'regions_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Andrés Eloy Blanco',
                'status' => 'A',
                'regions_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Pedro Cova',
                'status' => 'A',
                'regions_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Raúl Leoni',
                'status' => 'A',
                'regions_id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Barceloneta',
                'status' => 'A',
                'regions_id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Santa Bárbara',
                'status' => 'A',
                'regions_id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'San Francisco',
                'status' => 'A',
                'regions_id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Roscio',
                'status' => 'A',
                'regions_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Salóm',
                'status' => 'A',
                'regions_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Sifontes',
                'status' => 'A',
                'regions_id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Dalla Costa',
                'status' => 'A',
                'regions_id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'San Isidro',
                'status' => 'A',
                'regions_id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Sucre',
                'status' => 'A',
                'regions_id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Aripao',
                'status' => 'A',
                'regions_id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Guarataro',
                'status' => 'A',
                'regions_id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Las Majadas',
                'status' => 'A',
                'regions_id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'Moitaco',
                'status' => 'A',
                'regions_id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'Padre Pedro Chien',
                'status' => 'A',
                'regions_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Río Grande',
                'status' => 'A',
                'regions_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'Bejuma',
                'status' => 'A',
                'regions_id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'Canoabo',
                'status' => 'A',
                'regions_id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'Simón Bolívar',
                'status' => 'A',
                'regions_id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Güigüe',
                'status' => 'A',
                'regions_id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'Carabobo',
                'status' => 'A',
                'regions_id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'Tacarigua',
                'status' => 'A',
                'regions_id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'Mariara',
                'status' => 'A',
                'regions_id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'Aguas Calientes',
                'status' => 'A',
                'regions_id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'Ciudad Alianza',
                'status' => 'A',
                'regions_id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'Guacara',
                'status' => 'A',
                'regions_id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'Yagua',
                'status' => 'A',
                'regions_id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'Morón',
                'status' => 'A',
                'regions_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'Yagua',
                'status' => 'A',
                'regions_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'Tocuyito',
                'status' => 'A',
                'regions_id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'Independencia',
                'status' => 'A',
                'regions_id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'Los Guayos',
                'status' => 'A',
                'regions_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'Miranda',
                'status' => 'A',
                'regions_id' => 84,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'Montalbán',
                'status' => 'A',
                'regions_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'Naguanagua',
                'status' => 'A',
                'regions_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'Bartolomé Salóm',
                'status' => 'A',
                'regions_id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'Democracia',
                'status' => 'A',
                'regions_id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'Fraternidad',
                'status' => 'A',
                'regions_id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'Goaigoaza',
                'status' => 'A',
                'regions_id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'Juan José Flores',
                'status' => 'A',
                'regions_id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'Unión',
                'status' => 'A',
                'regions_id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'Borburata',
                'status' => 'A',
                'regions_id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'Patanemo',
                'status' => 'A',
                'regions_id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'San Diego',
                'status' => 'A',
                'regions_id' => 88,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'San Joaquín',
                'status' => 'A',
                'regions_id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Candelaria',
                'status' => 'A',
                'regions_id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Catedral',
                'status' => 'A',
                'regions_id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'El Socorro',
                'status' => 'A',
                'regions_id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Miguel Peña',
                'status' => 'A',
                'regions_id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'Rafael Urdaneta',
                'status' => 'A',
                'regions_id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'San Blas',
                'status' => 'A',
                'regions_id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'San José',
                'status' => 'A',
                'regions_id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'Santa Rosa',
                'status' => 'A',
                'regions_id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'Negro Primero',
                'status' => 'A',
                'regions_id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'Cojedes',
                'status' => 'A',
                'regions_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Juan de Mata Suárez',
                'status' => 'A',
                'regions_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'Tinaquillo',
                'status' => 'A',
                'regions_id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'El Baúl',
                'status' => 'A',
                'regions_id' => 93,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'Sucre',
                'status' => 'A',
                'regions_id' => 93,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'La Aguadita',
                'status' => 'A',
                'regions_id' => 94,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Macapo',
                'status' => 'A',
                'regions_id' => 94,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'El Pao',
                'status' => 'A',
                'regions_id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'El Amparo',
                'status' => 'A',
                'regions_id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Libertad de Cojedes',
                'status' => 'A',
                'regions_id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'Rómulo Gallegos',
                'status' => 'A',
                'regions_id' => 97,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'San Carlos de Austria',
                'status' => 'A',
                'regions_id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'Juan Ángel Bravo',
                'status' => 'A',
                'regions_id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'Manuel Manrique',
                'status' => 'A',
                'regions_id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'General en Jefe José Laurencio Silva',
                'status' => 'A',
                'regions_id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'Curiapo',
                'status' => 'A',
                'regions_id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'Almirante Luis Brión',
                'status' => 'A',
                'regions_id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'Francisco Aniceto Lugo',
                'status' => 'A',
                'regions_id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'Manuel Renaud',
                'status' => 'A',
                'regions_id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'Padre Barral',
                'status' => 'A',
                'regions_id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'Santos de Abelgas',
                'status' => 'A',
                'regions_id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Imataca',
                'status' => 'A',
                'regions_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Cinco de Julio',
                'status' => 'A',
                'regions_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'Juan Bautista Arismendi',
                'status' => 'A',
                'regions_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Manuel Piar',
                'status' => 'A',
                'regions_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Rómulo Gallegos',
                'status' => 'A',
                'regions_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'Pedernales',
                'status' => 'A',
                'regions_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'Luis Beltrán Prieto Figueroa',
                'status' => 'A',
                'regions_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
            'name' => 'San José (Delta Amacuro)',
                'status' => 'A',
                'regions_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'José Vidal Marcano',
                'status' => 'A',
                'regions_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'Juan Millán',
                'status' => 'A',
                'regions_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'Leonardo Ruíz Pineda',
                'status' => 'A',
                'regions_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Mariscal Antonio José de Sucre',
                'status' => 'A',
                'regions_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'Monseñor Argimiro García',
                'status' => 'A',
                'regions_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
            'name' => 'San Rafael (Delta Amacuro)',
                'status' => 'A',
                'regions_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Virgen del Valle',
                'status' => 'A',
                'regions_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Clarines',
                'status' => 'A',
                'regions_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'Guanape',
                'status' => 'A',
                'regions_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'Sabana de Uchire',
                'status' => 'A',
                'regions_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'Capadare',
                'status' => 'A',
                'regions_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'La Pastora',
                'status' => 'A',
                'regions_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'Libertador',
                'status' => 'A',
                'regions_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'San Juan de los Cayos',
                'status' => 'A',
                'regions_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'Aracua',
                'status' => 'A',
                'regions_id' => 105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'La Peña',
                'status' => 'A',
                'regions_id' => 105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'San Luis',
                'status' => 'A',
                'regions_id' => 105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'Bariro',
                'status' => 'A',
                'regions_id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Borojó',
                'status' => 'A',
                'regions_id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'Capatárida',
                'status' => 'A',
                'regions_id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'Guajiro',
                'status' => 'A',
                'regions_id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'Seque',
                'status' => 'A',
                'regions_id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'Zazárida',
                'status' => 'A',
                'regions_id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'Valle de Eroa',
                'status' => 'A',
                'regions_id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'Cacique Manaure',
                'status' => 'A',
                'regions_id' => 107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'Norte',
                'status' => 'A',
                'regions_id' => 108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'Carirubana',
                'status' => 'A',
                'regions_id' => 108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'Santa Ana',
                'status' => 'A',
                'regions_id' => 108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'Urbana Punta Cardón',
                'status' => 'A',
                'regions_id' => 108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'La Vela de Coro',
                'status' => 'A',
                'regions_id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'Acurigua',
                'status' => 'A',
                'regions_id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'Guaibacoa',
                'status' => 'A',
                'regions_id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'Las Calderas',
                'status' => 'A',
                'regions_id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'Macoruca',
                'status' => 'A',
                'regions_id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'Dabajuro',
                'status' => 'A',
                'regions_id' => 110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'Agua Clara',
                'status' => 'A',
                'regions_id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'Avaria',
                'status' => 'A',
                'regions_id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'Pedregal',
                'status' => 'A',
                'regions_id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'Piedra Grande',
                'status' => 'A',
                'regions_id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'Purureche',
                'status' => 'A',
                'regions_id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'Adaure',
                'status' => 'A',
                'regions_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'Adícora',
                'status' => 'A',
                'regions_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'Baraived',
                'status' => 'A',
                'regions_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'Buena Vista',
                'status' => 'A',
                'regions_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'Jadacaquiva',
                'status' => 'A',
                'regions_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'El Vínculo',
                'status' => 'A',
                'regions_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'El Hato',
                'status' => 'A',
                'regions_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'Moruy',
                'status' => 'A',
                'regions_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'Pueblo Nuevo',
                'status' => 'A',
                'regions_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'Agua Larga',
                'status' => 'A',
                'regions_id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'El Paují',
                'status' => 'A',
                'regions_id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'Independencia',
                'status' => 'A',
                'regions_id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'Mapararí',
                'status' => 'A',
                'regions_id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'Agua Linda',
                'status' => 'A',
                'regions_id' => 114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'Araurima',
                'status' => 'A',
                'regions_id' => 114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'Jacura',
                'status' => 'A',
                'regions_id' => 114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'Tucacas',
                'status' => 'A',
                'regions_id' => 115,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'Boca de Aroa',
                'status' => 'A',
                'regions_id' => 115,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'Los Taques',
                'status' => 'A',
                'regions_id' => 116,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'Judibana',
                'status' => 'A',
                'regions_id' => 116,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'Mene de Mauroa',
                'status' => 'A',
                'regions_id' => 117,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'San Félix',
                'status' => 'A',
                'regions_id' => 117,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'Casigua',
                'status' => 'A',
                'regions_id' => 117,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'Guzmán Guillermo',
                'status' => 'A',
                'regions_id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'Mitare',
                'status' => 'A',
                'regions_id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'Río Seco',
                'status' => 'A',
                'regions_id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'Sabaneta',
                'status' => 'A',
                'regions_id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'San Antonio',
                'status' => 'A',
                'regions_id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'San Gabriel',
                'status' => 'A',
                'regions_id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'Santa Ana',
                'status' => 'A',
                'regions_id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'Boca del Tocuyo',
                'status' => 'A',
                'regions_id' => 119,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'Chichiriviche',
                'status' => 'A',
                'regions_id' => 119,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'Tocuyo de la Costa',
                'status' => 'A',
                'regions_id' => 119,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'Palmasola',
                'status' => 'A',
                'regions_id' => 120,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'Cabure',
                'status' => 'A',
                'regions_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'Colina',
                'status' => 'A',
                'regions_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'Curimagua',
                'status' => 'A',
                'regions_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'San José de la Costa',
                'status' => 'A',
                'regions_id' => 122,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'Píritu',
                'status' => 'A',
                'regions_id' => 122,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'San Francisco',
                'status' => 'A',
                'regions_id' => 123,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'Sucre',
                'status' => 'A',
                'regions_id' => 124,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'Pecaya',
                'status' => 'A',
                'regions_id' => 124,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'Tocópero',
                'status' => 'A',
                'regions_id' => 125,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'El Charal',
                'status' => 'A',
                'regions_id' => 126,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'Las Vegas del Tuy',
                'status' => 'A',
                'regions_id' => 126,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'Santa Cruz de Bucaral',
                'status' => 'A',
                'regions_id' => 126,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'Bruzual',
                'status' => 'A',
                'regions_id' => 127,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'Urumaco',
                'status' => 'A',
                'regions_id' => 127,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'Puerto Cumarebo',
                'status' => 'A',
                'regions_id' => 128,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'La Ciénaga',
                'status' => 'A',
                'regions_id' => 128,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'La Soledad',
                'status' => 'A',
                'regions_id' => 128,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'Pueblo Cumarebo',
                'status' => 'A',
                'regions_id' => 128,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'Zazárida',
                'status' => 'A',
                'regions_id' => 128,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'Churuguara',
                'status' => 'A',
                'regions_id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'Camaguán',
                'status' => 'A',
                'regions_id' => 129,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'Puerto Miranda',
                'status' => 'A',
                'regions_id' => 129,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'Uverito',
                'status' => 'A',
                'regions_id' => 129,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'Chaguaramas',
                'status' => 'A',
                'regions_id' => 130,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'El Socorro',
                'status' => 'A',
                'regions_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'Tucupido',
                'status' => 'A',
                'regions_id' => 132,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'San Rafael de Laya',
                'status' => 'A',
                'regions_id' => 132,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'Altagracia de Orituco',
                'status' => 'A',
                'regions_id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'San Rafael de Orituco',
                'status' => 'A',
                'regions_id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'San Francisco Javier de Lezama',
                'status' => 'A',
                'regions_id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'Paso Real de Macaira',
                'status' => 'A',
                'regions_id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'Carlos Soublette',
                'status' => 'A',
                'regions_id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'San Francisco de Macaira',
                'status' => 'A',
                'regions_id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'Libertad de Orituco',
                'status' => 'A',
                'regions_id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'Cantaclaro',
                'status' => 'A',
                'regions_id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'San Juan de los Morros',
                'status' => 'A',
                'regions_id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'Parapara',
                'status' => 'A',
                'regions_id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'El Sombrero',
                'status' => 'A',
                'regions_id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'Sosa',
                'status' => 'A',
                'regions_id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'Las Mercedes',
                'status' => 'A',
                'regions_id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'Cabruta',
                'status' => 'A',
                'regions_id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'Santa Rita de Manapire',
                'status' => 'A',
                'regions_id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'Valle de la Pascua',
                'status' => 'A',
                'regions_id' => 137,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'Espino',
                'status' => 'A',
                'regions_id' => 137,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'San José de Unare',
                'status' => 'A',
                'regions_id' => 138,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'Zaraza',
                'status' => 'A',
                'regions_id' => 138,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'San José de Tiznados',
                'status' => 'A',
                'regions_id' => 139,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'San Francisco de Tiznados',
                'status' => 'A',
                'regions_id' => 139,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'name' => 'San Lorenzo de Tiznados',
                'status' => 'A',
                'regions_id' => 139,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'Ortiz',
                'status' => 'A',
                'regions_id' => 139,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'Guayabal',
                'status' => 'A',
                'regions_id' => 140,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'Cazorla',
                'status' => 'A',
                'regions_id' => 140,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'San José de Guaribe',
                'status' => 'A',
                'regions_id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'name' => 'Uveral',
                'status' => 'A',
                'regions_id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'Santa María de Ipire',
                'status' => 'A',
                'regions_id' => 142,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'Altamira',
                'status' => 'A',
                'regions_id' => 142,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'El Calvario',
                'status' => 'A',
                'regions_id' => 143,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'El Rastro',
                'status' => 'A',
                'regions_id' => 143,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'Guardatinajas',
                'status' => 'A',
                'regions_id' => 143,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'Capital Urbana Calabozo',
                'status' => 'A',
                'regions_id' => 143,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'Quebrada Honda de Guache',
                'status' => 'A',
                'regions_id' => 144,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'Pío Tamayo',
                'status' => 'A',
                'regions_id' => 144,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'Yacambú',
                'status' => 'A',
                'regions_id' => 144,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'name' => 'Fréitez',
                'status' => 'A',
                'regions_id' => 145,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'José María Blanco',
                'status' => 'A',
                'regions_id' => 145,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'name' => 'Catedral',
                'status' => 'A',
                'regions_id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'Concepción',
                'status' => 'A',
                'regions_id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'El Cují',
                'status' => 'A',
                'regions_id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'Juan de Villegas',
                'status' => 'A',
                'regions_id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'Santa Rosa',
                'status' => 'A',
                'regions_id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'Tamaca',
                'status' => 'A',
                'regions_id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'Unión',
                'status' => 'A',
                'regions_id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'Aguedo Felipe Alvarado',
                'status' => 'A',
                'regions_id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'Buena Vista',
                'status' => 'A',
                'regions_id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'Juárez',
                'status' => 'A',
                'regions_id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'Juan Bautista Rodríguez',
                'status' => 'A',
                'regions_id' => 147,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'Cuara',
                'status' => 'A',
                'regions_id' => 147,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'Diego de Lozada',
                'status' => 'A',
                'regions_id' => 147,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'Paraíso de San José',
                'status' => 'A',
                'regions_id' => 147,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'San Miguel',
                'status' => 'A',
                'regions_id' => 147,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'name' => 'Tintorero',
                'status' => 'A',
                'regions_id' => 147,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'José Bernardo Dorante',
                'status' => 'A',
                'regions_id' => 147,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'Coronel Mariano Peraza ',
                'status' => 'A',
                'regions_id' => 147,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'Bolívar',
                'status' => 'A',
                'regions_id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'name' => 'Anzoátegui',
                'status' => 'A',
                'regions_id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'Guarico',
                'status' => 'A',
                'regions_id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'name' => 'Hilario Luna y Luna',
                'status' => 'A',
                'regions_id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'Humocaro Alto',
                'status' => 'A',
                'regions_id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'Humocaro Bajo',
                'status' => 'A',
                'regions_id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'La Candelaria',
                'status' => 'A',
                'regions_id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'Morán',
                'status' => 'A',
                'regions_id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'Cabudare',
                'status' => 'A',
                'regions_id' => 149,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'José Gregorio Bastidas',
                'status' => 'A',
                'regions_id' => 149,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'Agua Viva',
                'status' => 'A',
                'regions_id' => 149,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'Sarare',
                'status' => 'A',
                'regions_id' => 150,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'Buría',
                'status' => 'A',
                'regions_id' => 150,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'Gustavo Vegas León',
                'status' => 'A',
                'regions_id' => 150,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'Trinidad Samuel',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'Antonio Díaz',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'Camacaro',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'Castañeda',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'Cecilio Zubillaga',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'Chiquinquirá',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'El Blanco',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'Espinoza de los Monteros',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'Lara',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'name' => 'Las Mercedes',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'name' => 'Manuel Morillo',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'Montaña Verde',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'Montes de Oca',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'name' => 'Torres',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'Heriberto Arroyo',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'Reyes Vargas',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'Altagracia',
                'status' => 'A',
                'regions_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'Siquisique',
                'status' => 'A',
                'regions_id' => 152,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'Moroturo',
                'status' => 'A',
                'regions_id' => 152,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'San Miguel',
                'status' => 'A',
                'regions_id' => 152,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'Xaguas',
                'status' => 'A',
                'regions_id' => 152,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'Presidente Betancourt',
                'status' => 'A',
                'regions_id' => 179,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'Presidente Páez',
                'status' => 'A',
                'regions_id' => 179,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'Presidente Rómulo Gallegos',
                'status' => 'A',
                'regions_id' => 179,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'Gabriel Picón González',
                'status' => 'A',
                'regions_id' => 179,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'name' => 'Héctor Amable Mora',
                'status' => 'A',
                'regions_id' => 179,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'name' => 'José Nucete Sardi',
                'status' => 'A',
                'regions_id' => 179,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'Pulido Méndez',
                'status' => 'A',
                'regions_id' => 179,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'La Azulita',
                'status' => 'A',
                'regions_id' => 180,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'Santa Cruz de Mora',
                'status' => 'A',
                'regions_id' => 181,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'Mesa Bolívar',
                'status' => 'A',
                'regions_id' => 181,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'Mesa de Las Palmas',
                'status' => 'A',
                'regions_id' => 181,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'Aricagua',
                'status' => 'A',
                'regions_id' => 182,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'San Antonio',
                'status' => 'A',
                'regions_id' => 182,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'name' => 'Canagua',
                'status' => 'A',
                'regions_id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'Capurí',
                'status' => 'A',
                'regions_id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'Chacantá',
                'status' => 'A',
                'regions_id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'El Molino',
                'status' => 'A',
                'regions_id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'Guaimaral',
                'status' => 'A',
                'regions_id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'Mucutuy',
                'status' => 'A',
                'regions_id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'name' => 'Mucuchachí',
                'status' => 'A',
                'regions_id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'Fernández Peña',
                'status' => 'A',
                'regions_id' => 184,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'name' => 'Matriz',
                'status' => 'A',
                'regions_id' => 184,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'Montalbán',
                'status' => 'A',
                'regions_id' => 184,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'Acequias',
                'status' => 'A',
                'regions_id' => 184,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'Jají',
                'status' => 'A',
                'regions_id' => 184,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'La Mesa',
                'status' => 'A',
                'regions_id' => 184,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'San José del Sur',
                'status' => 'A',
                'regions_id' => 184,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'name' => 'Tucaní',
                'status' => 'A',
                'regions_id' => 185,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'name' => 'Florencio Ramírez',
                'status' => 'A',
                'regions_id' => 185,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'name' => 'Santo Domingo',
                'status' => 'A',
                'regions_id' => 186,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'name' => 'Las Piedras',
                'status' => 'A',
                'regions_id' => 186,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'name' => 'Guaraque',
                'status' => 'A',
                'regions_id' => 187,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'name' => 'Mesa de Quintero',
                'status' => 'A',
                'regions_id' => 187,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'name' => 'Río Negro',
                'status' => 'A',
                'regions_id' => 187,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'name' => 'Arapuey',
                'status' => 'A',
                'regions_id' => 188,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'name' => 'Palmira',
                'status' => 'A',
                'regions_id' => 188,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
                'name' => 'San Cristóbal de Torondoy',
                'status' => 'A',
                'regions_id' => 189,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'name' => 'Torondoy',
                'status' => 'A',
                'regions_id' => 189,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'name' => 'Antonio Spinetti Dini',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'name' => 'Arias',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'name' => 'Caracciolo Parra Pérez',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'name' => 'Domingo Peña',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'name' => 'El Llano',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'name' => 'Gonzalo Picón Febres',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'name' => 'Jacinto Plaza',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'name' => 'Juan Rodríguez Suárez',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'name' => 'Lasso de la Vega',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'name' => 'Mariano Picón Salas',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'name' => 'Milla',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'name' => 'Osuna Rodríguez',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'name' => 'Sagrario',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'name' => 'El Morro',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'name' => 'Los Nevados',
                'status' => 'A',
                'regions_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'name' => 'Andrés Eloy Blanco',
                'status' => 'A',
                'regions_id' => 191,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'name' => 'La Venta',
                'status' => 'A',
                'regions_id' => 191,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'name' => 'Piñango',
                'status' => 'A',
                'regions_id' => 191,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'name' => 'Timotes',
                'status' => 'A',
                'regions_id' => 191,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'name' => 'Eloy Paredes',
                'status' => 'A',
                'regions_id' => 192,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'name' => 'San Rafael de Alcázar',
                'status' => 'A',
                'regions_id' => 192,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'name' => 'Santa Elena de Arenales',
                'status' => 'A',
                'regions_id' => 192,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'name' => 'Santa María de Caparo',
                'status' => 'A',
                'regions_id' => 193,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'name' => 'Pueblo Llano',
                'status' => 'A',
                'regions_id' => 194,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'name' => 'Cacute',
                'status' => 'A',
                'regions_id' => 195,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'name' => 'La Toma',
                'status' => 'A',
                'regions_id' => 195,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'name' => 'Mucuchíes',
                'status' => 'A',
                'regions_id' => 195,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'name' => 'Mucurubá',
                'status' => 'A',
                'regions_id' => 195,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'name' => 'San Rafael',
                'status' => 'A',
                'regions_id' => 195,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'name' => 'Gerónimo Maldonado',
                'status' => 'A',
                'regions_id' => 196,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'name' => 'Bailadores',
                'status' => 'A',
                'regions_id' => 196,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'name' => 'Tabay',
                'status' => 'A',
                'regions_id' => 197,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'name' => 'Chiguará',
                'status' => 'A',
                'regions_id' => 198,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'name' => 'Estánquez',
                'status' => 'A',
                'regions_id' => 198,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'name' => 'Lagunillas',
                'status' => 'A',
                'regions_id' => 198,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'name' => 'La Trampa',
                'status' => 'A',
                'regions_id' => 198,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'name' => 'Pueblo Nuevo del Sur',
                'status' => 'A',
                'regions_id' => 198,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'name' => 'San Juan',
                'status' => 'A',
                'regions_id' => 198,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'name' => 'El Amparo',
                'status' => 'A',
                'regions_id' => 199,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'name' => 'El Llano',
                'status' => 'A',
                'regions_id' => 199,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'name' => 'San Francisco',
                'status' => 'A',
                'regions_id' => 199,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'name' => 'Tovar',
                'status' => 'A',
                'regions_id' => 199,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'name' => 'Independencia',
                'status' => 'A',
                'regions_id' => 200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'name' => 'María de la Concepción Palacios Blanco',
                'status' => 'A',
                'regions_id' => 200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'name' => 'Nueva Bolivia',
                'status' => 'A',
                'regions_id' => 200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'name' => 'Santa Apolonia',
                'status' => 'A',
                'regions_id' => 200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'name' => 'Caño El Tigre',
                'status' => 'A',
                'regions_id' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'name' => 'Zea',
                'status' => 'A',
                'regions_id' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'name' => 'Aragüita',
                'status' => 'A',
                'regions_id' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'name' => 'Arévalo González',
                'status' => 'A',
                'regions_id' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'name' => 'Capaya',
                'status' => 'A',
                'regions_id' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'name' => 'Caucagua',
                'status' => 'A',
                'regions_id' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'name' => 'Panaquire',
                'status' => 'A',
                'regions_id' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'name' => 'Ribas',
                'status' => 'A',
                'regions_id' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'name' => 'El Café',
                'status' => 'A',
                'regions_id' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'name' => 'Marizapa',
                'status' => 'A',
                'regions_id' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'name' => 'Cumbo',
                'status' => 'A',
                'regions_id' => 224,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'name' => 'San José de Barlovento',
                'status' => 'A',
                'regions_id' => 224,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'name' => 'El Cafetal',
                'status' => 'A',
                'regions_id' => 225,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'name' => 'Las Minas',
                'status' => 'A',
                'regions_id' => 225,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'name' => 'Nuestra Señora del Rosario',
                'status' => 'A',
                'regions_id' => 225,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'name' => 'Higuerote',
                'status' => 'A',
                'regions_id' => 226,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'name' => 'Curiepe',
                'status' => 'A',
                'regions_id' => 226,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'name' => 'Tacarigua de Brión',
                'status' => 'A',
                'regions_id' => 226,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'name' => 'Mamporal',
                'status' => 'A',
                'regions_id' => 227,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'name' => 'Carrizal',
                'status' => 'A',
                'regions_id' => 228,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'name' => 'Chacao',
                'status' => 'A',
                'regions_id' => 229,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'name' => 'Charallave',
                'status' => 'A',
                'regions_id' => 230,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'name' => 'Las Brisas',
                'status' => 'A',
                'regions_id' => 230,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'name' => 'El Hatillo',
                'status' => 'A',
                'regions_id' => 231,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'name' => 'Altagracia de la Montaña',
                'status' => 'A',
                'regions_id' => 232,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'name' => 'Cecilio Acosta',
                'status' => 'A',
                'regions_id' => 232,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'name' => 'Los Teques',
                'status' => 'A',
                'regions_id' => 232,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'name' => 'El Jarillo',
                'status' => 'A',
                'regions_id' => 232,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'name' => 'San Pedro',
                'status' => 'A',
                'regions_id' => 232,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'name' => 'Tácata',
                'status' => 'A',
                'regions_id' => 232,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'name' => 'Paracotos',
                'status' => 'A',
                'regions_id' => 232,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'name' => 'Cartanal',
                'status' => 'A',
                'regions_id' => 233,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'name' => 'Santa Teresa del Tuy',
                'status' => 'A',
                'regions_id' => 233,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'name' => 'La Democracia',
                'status' => 'A',
                'regions_id' => 234,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'name' => 'Ocumare del Tuy',
                'status' => 'A',
                'regions_id' => 234,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'name' => 'Santa Bárbara',
                'status' => 'A',
                'regions_id' => 234,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'name' => 'San Antonio de los Altos',
                'status' => 'A',
                'regions_id' => 235,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'name' => 'Río Chico',
                'status' => 'A',
                'regions_id' => 236,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'name' => 'El Guapo',
                'status' => 'A',
                'regions_id' => 236,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'name' => 'Tacarigua de la Laguna',
                'status' => 'A',
                'regions_id' => 236,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'name' => 'Paparo',
                'status' => 'A',
                'regions_id' => 236,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'name' => 'San Fernando del Guapo',
                'status' => 'A',
                'regions_id' => 236,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'name' => 'Santa Lucía del Tuy',
                'status' => 'A',
                'regions_id' => 237,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'name' => 'Cúpira',
                'status' => 'A',
                'regions_id' => 238,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'name' => 'Machurucuto',
                'status' => 'A',
                'regions_id' => 238,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'name' => 'Guarenas',
                'status' => 'A',
                'regions_id' => 239,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'name' => 'San Antonio de Yare',
                'status' => 'A',
                'regions_id' => 240,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'name' => 'San Francisco de Yare',
                'status' => 'A',
                'regions_id' => 240,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'name' => 'Leoncio Martínez',
                'status' => 'A',
                'regions_id' => 241,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'name' => 'Petare',
                'status' => 'A',
                'regions_id' => 241,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'name' => 'Caucagüita',
                'status' => 'A',
                'regions_id' => 241,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'name' => 'Filas de Mariche',
                'status' => 'A',
                'regions_id' => 241,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'name' => 'La Dolorita',
                'status' => 'A',
                'regions_id' => 241,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'name' => 'Cúa',
                'status' => 'A',
                'regions_id' => 242,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'name' => 'Nueva Cúa',
                'status' => 'A',
                'regions_id' => 242,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'name' => 'Guatire',
                'status' => 'A',
                'regions_id' => 243,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'name' => 'Bolívar',
                'status' => 'A',
                'regions_id' => 243,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'name' => 'San Antonio de Maturín',
                'status' => 'A',
                'regions_id' => 258,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'name' => 'San Francisco de Maturín',
                'status' => 'A',
                'regions_id' => 258,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'name' => 'Aguasay',
                'status' => 'A',
                'regions_id' => 259,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'name' => 'Caripito',
                'status' => 'A',
                'regions_id' => 260,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'name' => 'El Guácharo',
                'status' => 'A',
                'regions_id' => 261,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'name' => 'La Guanota',
                'status' => 'A',
                'regions_id' => 261,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'name' => 'Sabana de Piedra',
                'status' => 'A',
                'regions_id' => 261,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'name' => 'San Agustín',
                'status' => 'A',
                'regions_id' => 261,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'name' => 'Teresen',
                'status' => 'A',
                'regions_id' => 261,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'name' => 'Caripe',
                'status' => 'A',
                'regions_id' => 261,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'name' => 'Areo',
                'status' => 'A',
                'regions_id' => 262,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'name' => 'Capital Cedeño',
                'status' => 'A',
                'regions_id' => 262,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'name' => 'San Félix de Cantalicio',
                'status' => 'A',
                'regions_id' => 262,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'name' => 'Viento Fresco',
                'status' => 'A',
                'regions_id' => 262,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'name' => 'El Tejero',
                'status' => 'A',
                'regions_id' => 263,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'name' => 'Punta de Mata',
                'status' => 'A',
                'regions_id' => 263,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'name' => 'Chaguaramas',
                'status' => 'A',
                'regions_id' => 264,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'name' => 'Las Alhuacas',
                'status' => 'A',
                'regions_id' => 264,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'name' => 'Tabasca',
                'status' => 'A',
                'regions_id' => 264,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'name' => 'Temblador',
                'status' => 'A',
                'regions_id' => 264,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'name' => 'Alto de los Godos',
                'status' => 'A',
                'regions_id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'name' => 'Boquerón',
                'status' => 'A',
                'regions_id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'name' => 'Las Cocuizas',
                'status' => 'A',
                'regions_id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'name' => 'La Cruz',
                'status' => 'A',
                'regions_id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'name' => 'San Simón',
                'status' => 'A',
                'regions_id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'name' => 'El Corozo',
                'status' => 'A',
                'regions_id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'name' => 'El Furrial',
                'status' => 'A',
                'regions_id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'name' => 'Jusepín',
                'status' => 'A',
                'regions_id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'name' => 'La Pica',
                'status' => 'A',
                'regions_id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'name' => 'San Vicente',
                'status' => 'A',
                'regions_id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'name' => 'Aparicio',
                'status' => 'A',
                'regions_id' => 266,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'name' => 'Aragua de Maturín',
                'status' => 'A',
                'regions_id' => 266,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'name' => 'Chaguamal',
                'status' => 'A',
                'regions_id' => 266,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'name' => 'El Pinto',
                'status' => 'A',
                'regions_id' => 266,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'name' => 'Guanaguana',
                'status' => 'A',
                'regions_id' => 266,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'name' => 'La Toscana',
                'status' => 'A',
                'regions_id' => 266,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'name' => 'Taguaya',
                'status' => 'A',
                'regions_id' => 266,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'name' => 'Cachipo',
                'status' => 'A',
                'regions_id' => 267,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'name' => 'Quiriquire',
                'status' => 'A',
                'regions_id' => 267,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'name' => 'Santa Bárbara',
                'status' => 'A',
                'regions_id' => 268,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'name' => 'Barrancas',
                'status' => 'A',
                'regions_id' => 269,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'name' => 'Los Barrancos de Fajardo',
                'status' => 'A',
                'regions_id' => 269,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'name' => 'Uracoa',
                'status' => 'A',
                'regions_id' => 270,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'name' => 'Antolín del Campo',
                'status' => 'A',
                'regions_id' => 271,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'name' => 'Arismendi',
                'status' => 'A',
                'regions_id' => 272,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'name' => 'García',
                'status' => 'A',
                'regions_id' => 273,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'name' => 'Francisco Fajardo',
                'status' => 'A',
                'regions_id' => 273,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'name' => 'Bolívar',
                'status' => 'A',
                'regions_id' => 274,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'name' => 'Guevara',
                'status' => 'A',
                'regions_id' => 274,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'name' => 'Matasiete',
                'status' => 'A',
                'regions_id' => 274,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'name' => 'Santa Ana',
                'status' => 'A',
                'regions_id' => 274,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'name' => 'Sucre',
                'status' => 'A',
                'regions_id' => 274,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'name' => 'Aguirre',
                'status' => 'A',
                'regions_id' => 275,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'name' => 'Maneiro',
                'status' => 'A',
                'regions_id' => 275,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'name' => 'Adrián',
                'status' => 'A',
                'regions_id' => 276,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'name' => 'Juan Griego',
                'status' => 'A',
                'regions_id' => 276,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'name' => 'Yaguaraparo',
                'status' => 'A',
                'regions_id' => 276,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'name' => 'Porlamar',
                'status' => 'A',
                'regions_id' => 277,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'name' => 'San Francisco de Macanao',
                'status' => 'A',
                'regions_id' => 278,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'name' => 'Boca de Río',
                'status' => 'A',
                'regions_id' => 278,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'name' => 'Tubores',
                'status' => 'A',
                'regions_id' => 279,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'name' => 'Los Baleales',
                'status' => 'A',
                'regions_id' => 279,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'name' => 'Vicente Fuentes',
                'status' => 'A',
                'regions_id' => 280,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'name' => 'Villalba',
                'status' => 'A',
                'regions_id' => 280,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
                'name' => 'San Juan Bautista',
                'status' => 'A',
                'regions_id' => 281,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'name' => 'Zabala',
                'status' => 'A',
                'regions_id' => 281,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'name' => 'Capital Araure',
                'status' => 'A',
                'regions_id' => 283,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'name' => 'Río Acarigua',
                'status' => 'A',
                'regions_id' => 283,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'name' => 'Capital Esteller',
                'status' => 'A',
                'regions_id' => 284,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
                'name' => 'Uveral',
                'status' => 'A',
                'regions_id' => 284,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'name' => 'Guanare',
                'status' => 'A',
                'regions_id' => 285,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'name' => 'Córdoba',
                'status' => 'A',
                'regions_id' => 285,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'name' => 'San José de la Montaña',
                'status' => 'A',
                'regions_id' => 285,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'name' => 'San Juan de Guanaguanare',
                'status' => 'A',
                'regions_id' => 285,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'name' => 'Virgen de la Coromoto',
                'status' => 'A',
                'regions_id' => 285,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'name' => 'Guanarito',
                'status' => 'A',
                'regions_id' => 286,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'name' => 'Trinidad de la Capilla',
                'status' => 'A',
                'regions_id' => 286,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'name' => 'Divina Pastora',
                'status' => 'A',
                'regions_id' => 286,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'name' => 'Monseñor José Vicente de Unda',
                'status' => 'A',
                'regions_id' => 287,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'name' => 'Peña Blanca',
                'status' => 'A',
                'regions_id' => 287,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'name' => 'Capital Ospino',
                'status' => 'A',
                'regions_id' => 288,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'name' => 'Aparición',
                'status' => 'A',
                'regions_id' => 288,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'name' => 'La Estación',
                'status' => 'A',
                'regions_id' => 288,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'name' => 'Páez',
                'status' => 'A',
                'regions_id' => 289,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'name' => 'Payara',
                'status' => 'A',
                'regions_id' => 289,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'name' => 'Pimpinela',
                'status' => 'A',
                'regions_id' => 289,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'name' => 'Ramón Peraza',
                'status' => 'A',
                'regions_id' => 289,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'name' => 'Papelón',
                'status' => 'A',
                'regions_id' => 290,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'name' => 'Caño Delgadito',
                'status' => 'A',
                'regions_id' => 290,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'name' => 'San Genaro de Boconoito',
                'status' => 'A',
                'regions_id' => 291,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'name' => 'Antolín Tovar',
                'status' => 'A',
                'regions_id' => 291,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'name' => 'San Rafael de Onoto',
                'status' => 'A',
                'regions_id' => 292,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'name' => 'Santa Fe',
                'status' => 'A',
                'regions_id' => 292,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'name' => 'Thermo Morles',
                'status' => 'A',
                'regions_id' => 292,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'name' => 'Santa Rosalía',
                'status' => 'A',
                'regions_id' => 293,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'name' => 'Florida',
                'status' => 'A',
                'regions_id' => 293,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'name' => 'Sucre',
                'status' => 'A',
                'regions_id' => 294,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'name' => 'Concepción',
                'status' => 'A',
                'regions_id' => 294,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'name' => 'San Rafael de Palo Alzado',
                'status' => 'A',
                'regions_id' => 294,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'name' => 'Uvencio Antonio Velásquez',
                'status' => 'A',
                'regions_id' => 294,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'name' => 'San José de Saguaz',
                'status' => 'A',
                'regions_id' => 294,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'name' => 'Villa Rosa',
                'status' => 'A',
                'regions_id' => 294,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'name' => 'Turén',
                'status' => 'A',
                'regions_id' => 295,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'name' => 'Canelones',
                'status' => 'A',
                'regions_id' => 295,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'name' => 'Santa Cruz',
                'status' => 'A',
                'regions_id' => 295,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'name' => 'San Isidro Labrador',
                'status' => 'A',
                'regions_id' => 295,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'name' => 'Mariño',
                'status' => 'A',
                'regions_id' => 296,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'name' => 'Rómulo Gallegos',
                'status' => 'A',
                'regions_id' => 296,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'name' => 'San José de Aerocuar',
                'status' => 'A',
                'regions_id' => 297,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'name' => 'Tavera Acosta',
                'status' => 'A',
                'regions_id' => 297,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'name' => 'Río Caribe',
                'status' => 'A',
                'regions_id' => 298,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'name' => 'Antonio José de Sucre',
                'status' => 'A',
                'regions_id' => 298,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'name' => 'El Morro de Puerto Santo',
                'status' => 'A',
                'regions_id' => 298,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'name' => 'Puerto Santo',
                'status' => 'A',
                'regions_id' => 298,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'name' => 'San Juan de las Galdonas',
                'status' => 'A',
                'regions_id' => 298,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
                'name' => 'El Pilar',
                'status' => 'A',
                'regions_id' => 299,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'name' => 'El Rincón',
                'status' => 'A',
                'regions_id' => 299,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'name' => 'General Francisco Antonio Váquez',
                'status' => 'A',
                'regions_id' => 299,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'name' => 'Guaraúnos',
                'status' => 'A',
                'regions_id' => 299,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 775,
                'name' => 'Tunapuicito',
                'status' => 'A',
                'regions_id' => 299,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 776,
                'name' => 'Unión',
                'status' => 'A',
                'regions_id' => 299,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'name' => 'Santa Catalina',
                'status' => 'A',
                'regions_id' => 300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 778,
                'name' => 'Santa Rosa',
                'status' => 'A',
                'regions_id' => 300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 779,
                'name' => 'Santa Teresa',
                'status' => 'A',
                'regions_id' => 300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 780,
                'name' => 'Bolívar',
                'status' => 'A',
                'regions_id' => 300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 781,
                'name' => 'Maracapana',
                'status' => 'A',
                'regions_id' => 300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 782,
                'name' => 'Libertad',
                'status' => 'A',
                'regions_id' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'name' => 'El Paujil',
                'status' => 'A',
                'regions_id' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 784,
                'name' => 'Yaguaraparo',
                'status' => 'A',
                'regions_id' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 785,
                'name' => 'Cruz Salmerón Acosta',
                'status' => 'A',
                'regions_id' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 786,
                'name' => 'Chacopata',
                'status' => 'A',
                'regions_id' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 787,
                'name' => 'Manicuare',
                'status' => 'A',
                'regions_id' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 788,
                'name' => 'Tunapuy',
                'status' => 'A',
                'regions_id' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 789,
                'name' => 'Campo Elías',
                'status' => 'A',
                'regions_id' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 790,
                'name' => 'Irapa',
                'status' => 'A',
                'regions_id' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'name' => 'Campo Claro',
                'status' => 'A',
                'regions_id' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 792,
                'name' => 'Maraval',
                'status' => 'A',
                'regions_id' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 793,
                'name' => 'San Antonio de Irapa',
                'status' => 'A',
                'regions_id' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 794,
                'name' => 'Soro',
                'status' => 'A',
                'regions_id' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 795,
                'name' => 'Mejía',
                'status' => 'A',
                'regions_id' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 796,
                'name' => 'Cumanacoa',
                'status' => 'A',
                'regions_id' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 797,
                'name' => 'Arenas',
                'status' => 'A',
                'regions_id' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'name' => 'Aricagua',
                'status' => 'A',
                'regions_id' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 799,
                'name' => 'Cogollar',
                'status' => 'A',
                'regions_id' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'name' => 'San Fernando',
                'status' => 'A',
                'regions_id' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 801,
                'name' => 'San Lorenzo',
                'status' => 'A',
                'regions_id' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 802,
            'name' => 'Villa Frontado (Muelle de Cariaco)',
                'status' => 'A',
                'regions_id' => 308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 803,
                'name' => 'Catuaro',
                'status' => 'A',
                'regions_id' => 308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 804,
                'name' => 'Rendón',
                'status' => 'A',
                'regions_id' => 308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 805,
                'name' => 'San Cruz',
                'status' => 'A',
                'regions_id' => 308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 806,
                'name' => 'Santa María',
                'status' => 'A',
                'regions_id' => 308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 807,
                'name' => 'Altagracia',
                'status' => 'A',
                'regions_id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'name' => 'Santa Inés',
                'status' => 'A',
                'regions_id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 809,
                'name' => 'Valentín Valiente',
                'status' => 'A',
                'regions_id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 810,
                'name' => 'Ayacucho',
                'status' => 'A',
                'regions_id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 811,
                'name' => 'San Juan',
                'status' => 'A',
                'regions_id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 812,
                'name' => 'Raúl Leoni',
                'status' => 'A',
                'regions_id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 813,
                'name' => 'Gran Mariscal',
                'status' => 'A',
                'regions_id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 814,
                'name' => 'Cristóbal Colón',
                'status' => 'A',
                'regions_id' => 310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 815,
                'name' => 'Bideau',
                'status' => 'A',
                'regions_id' => 310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 816,
                'name' => 'Punta de Piedras',
                'status' => 'A',
                'regions_id' => 310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 817,
                'name' => 'Güiria',
                'status' => 'A',
                'regions_id' => 310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 818,
                'name' => 'Andrés Bello',
                'status' => 'A',
                'regions_id' => 341,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 819,
                'name' => 'Antonio Rómulo Costa',
                'status' => 'A',
                'regions_id' => 342,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 820,
                'name' => 'Ayacucho',
                'status' => 'A',
                'regions_id' => 343,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 821,
                'name' => 'Rivas Berti',
                'status' => 'A',
                'regions_id' => 343,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'name' => 'San Pedro del Río',
                'status' => 'A',
                'regions_id' => 343,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 823,
                'name' => 'Bolívar',
                'status' => 'A',
                'regions_id' => 344,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 824,
                'name' => 'Palotal',
                'status' => 'A',
                'regions_id' => 344,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'name' => 'General Juan Vicente Gómez',
                'status' => 'A',
                'regions_id' => 344,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 826,
                'name' => 'Isaías Medina Angarita',
                'status' => 'A',
                'regions_id' => 344,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 827,
                'name' => 'Cárdenas',
                'status' => 'A',
                'regions_id' => 345,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'name' => 'Amenodoro Ángel Lamus',
                'status' => 'A',
                'regions_id' => 345,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'name' => 'La Florida',
                'status' => 'A',
                'regions_id' => 345,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'name' => 'Córdoba',
                'status' => 'A',
                'regions_id' => 346,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 831,
                'name' => 'Fernández Feo',
                'status' => 'A',
                'regions_id' => 347,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'name' => 'Alberto Adriani',
                'status' => 'A',
                'regions_id' => 347,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'name' => 'Santo Domingo',
                'status' => 'A',
                'regions_id' => 347,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 834,
                'name' => 'Francisco de Miranda',
                'status' => 'A',
                'regions_id' => 348,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 835,
                'name' => 'García de Hevia',
                'status' => 'A',
                'regions_id' => 349,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'name' => 'Boca de Grita',
                'status' => 'A',
                'regions_id' => 349,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 837,
                'name' => 'José Antonio Páez',
                'status' => 'A',
                'regions_id' => 349,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 838,
                'name' => 'Guásimos',
                'status' => 'A',
                'regions_id' => 350,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 839,
                'name' => 'Independencia',
                'status' => 'A',
                'regions_id' => 351,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 840,
                'name' => 'Juan Germán Roscio',
                'status' => 'A',
                'regions_id' => 351,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 841,
                'name' => 'Román Cárdenas',
                'status' => 'A',
                'regions_id' => 351,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 842,
                'name' => 'Jáuregui',
                'status' => 'A',
                'regions_id' => 352,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 843,
                'name' => 'Emilio Constantino Guerrero',
                'status' => 'A',
                'regions_id' => 352,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 844,
                'name' => 'Monseñor Miguel Antonio Salas',
                'status' => 'A',
                'regions_id' => 352,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 845,
                'name' => 'José María Vargas',
                'status' => 'A',
                'regions_id' => 353,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'name' => 'Junín',
                'status' => 'A',
                'regions_id' => 354,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 847,
                'name' => 'La Petrólea',
                'status' => 'A',
                'regions_id' => 354,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 848,
                'name' => 'Quinimarí',
                'status' => 'A',
                'regions_id' => 354,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 849,
                'name' => 'Bramón',
                'status' => 'A',
                'regions_id' => 354,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 850,
                'name' => 'Libertad',
                'status' => 'A',
                'regions_id' => 355,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 851,
                'name' => 'Cipriano Castro',
                'status' => 'A',
                'regions_id' => 355,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 852,
                'name' => 'Manuel Felipe Rugeles',
                'status' => 'A',
                'regions_id' => 355,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 853,
                'name' => 'Libertador',
                'status' => 'A',
                'regions_id' => 356,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 854,
                'name' => 'Doradas',
                'status' => 'A',
                'regions_id' => 356,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 855,
                'name' => 'Emeterio Ochoa',
                'status' => 'A',
                'regions_id' => 356,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 856,
                'name' => 'San Joaquín de Navay',
                'status' => 'A',
                'regions_id' => 356,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 857,
                'name' => 'Lobatera',
                'status' => 'A',
                'regions_id' => 357,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 858,
                'name' => 'Constitución',
                'status' => 'A',
                'regions_id' => 357,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 859,
                'name' => 'Michelena',
                'status' => 'A',
                'regions_id' => 358,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 860,
                'name' => 'Panamericano',
                'status' => 'A',
                'regions_id' => 359,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 861,
                'name' => 'La Palmita',
                'status' => 'A',
                'regions_id' => 359,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 862,
                'name' => 'Pedro María Ureña',
                'status' => 'A',
                'regions_id' => 360,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 863,
                'name' => 'Nueva Arcadia',
                'status' => 'A',
                'regions_id' => 360,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 864,
                'name' => 'Delicias',
                'status' => 'A',
                'regions_id' => 361,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 865,
                'name' => 'Pecaya',
                'status' => 'A',
                'regions_id' => 361,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 866,
                'name' => 'Samuel Darío Maldonado',
                'status' => 'A',
                'regions_id' => 362,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 867,
                'name' => 'Boconó',
                'status' => 'A',
                'regions_id' => 362,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 868,
                'name' => 'Hernández',
                'status' => 'A',
                'regions_id' => 362,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 869,
                'name' => 'La Concordia',
                'status' => 'A',
                'regions_id' => 363,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 870,
                'name' => 'San Juan Bautista',
                'status' => 'A',
                'regions_id' => 363,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 871,
                'name' => 'Pedro María Morantes',
                'status' => 'A',
                'regions_id' => 363,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 872,
                'name' => 'San Sebastián',
                'status' => 'A',
                'regions_id' => 363,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 873,
                'name' => 'Dr. Francisco Romero Lobo',
                'status' => 'A',
                'regions_id' => 363,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 874,
                'name' => 'Seboruco',
                'status' => 'A',
                'regions_id' => 364,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 875,
                'name' => 'Simón Rodríguez',
                'status' => 'A',
                'regions_id' => 365,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 876,
                'name' => 'Sucre',
                'status' => 'A',
                'regions_id' => 366,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 877,
                'name' => 'Eleazar López Contreras',
                'status' => 'A',
                'regions_id' => 366,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 878,
                'name' => 'San Pablo',
                'status' => 'A',
                'regions_id' => 366,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 879,
                'name' => 'Torbes',
                'status' => 'A',
                'regions_id' => 367,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 880,
                'name' => 'Uribante',
                'status' => 'A',
                'regions_id' => 368,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 881,
                'name' => 'Cárdenas',
                'status' => 'A',
                'regions_id' => 368,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 882,
                'name' => 'Juan Pablo Peñalosa',
                'status' => 'A',
                'regions_id' => 368,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'name' => 'Potosí',
                'status' => 'A',
                'regions_id' => 368,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 884,
                'name' => 'San Judas Tadeo',
                'status' => 'A',
                'regions_id' => 369,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 885,
                'name' => 'Araguaney',
                'status' => 'A',
                'regions_id' => 370,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 886,
                'name' => 'El Jaguito',
                'status' => 'A',
                'regions_id' => 370,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 887,
                'name' => 'La Esperanza',
                'status' => 'A',
                'regions_id' => 370,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 888,
                'name' => 'Santa Isabel',
                'status' => 'A',
                'regions_id' => 370,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 889,
                'name' => 'Boconó',
                'status' => 'A',
                'regions_id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 890,
                'name' => 'El Carmen',
                'status' => 'A',
                'regions_id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 891,
                'name' => 'Mosquey',
                'status' => 'A',
                'regions_id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 892,
                'name' => 'Ayacucho',
                'status' => 'A',
                'regions_id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 893,
                'name' => 'Burbusay',
                'status' => 'A',
                'regions_id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 894,
                'name' => 'General Ribas',
                'status' => 'A',
                'regions_id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 895,
                'name' => 'Guaramacal',
                'status' => 'A',
                'regions_id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 896,
                'name' => 'Vega de Guaramacal',
                'status' => 'A',
                'regions_id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 897,
                'name' => 'Monseñor Jáuregui',
                'status' => 'A',
                'regions_id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 898,
                'name' => 'Rafael Rangel',
                'status' => 'A',
                'regions_id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 899,
                'name' => 'San Miguel',
                'status' => 'A',
                'regions_id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 900,
                'name' => 'San José',
                'status' => 'A',
                'regions_id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 901,
                'name' => 'Sabana Grande',
                'status' => 'A',
                'regions_id' => 372,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 902,
                'name' => 'Cheregüé',
                'status' => 'A',
                'regions_id' => 372,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 903,
                'name' => 'Granados',
                'status' => 'A',
                'regions_id' => 372,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 904,
                'name' => 'Arnoldo Gabaldón',
                'status' => 'A',
                'regions_id' => 373,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 905,
                'name' => 'Bolivia',
                'status' => 'A',
                'regions_id' => 373,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 906,
                'name' => 'Carrillo',
                'status' => 'A',
                'regions_id' => 373,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 907,
                'name' => 'Cegarra',
                'status' => 'A',
                'regions_id' => 373,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 908,
                'name' => 'Chejendé',
                'status' => 'A',
                'regions_id' => 373,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 909,
                'name' => 'Manuel Salvador Ulloa',
                'status' => 'A',
                'regions_id' => 373,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 910,
                'name' => 'San José',
                'status' => 'A',
                'regions_id' => 373,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 911,
                'name' => 'Carache',
                'status' => 'A',
                'regions_id' => 374,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 912,
                'name' => 'La Concepción',
                'status' => 'A',
                'regions_id' => 374,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 913,
                'name' => 'Cuicas',
                'status' => 'A',
                'regions_id' => 374,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 914,
                'name' => 'Panamericana',
                'status' => 'A',
                'regions_id' => 374,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 915,
                'name' => 'Santa Cruz',
                'status' => 'A',
                'regions_id' => 374,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 916,
                'name' => 'Escuque',
                'status' => 'A',
                'regions_id' => 375,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 917,
                'name' => 'La Unión',
                'status' => 'A',
                'regions_id' => 375,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'name' => 'Santa Rita',
                'status' => 'A',
                'regions_id' => 375,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 919,
                'name' => 'Sabana Libre',
                'status' => 'A',
                'regions_id' => 375,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 920,
                'name' => 'El Socorro',
                'status' => 'A',
                'regions_id' => 376,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 921,
                'name' => 'Los Caprichos',
                'status' => 'A',
                'regions_id' => 376,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 922,
                'name' => 'Antonio José de Sucre',
                'status' => 'A',
                'regions_id' => 376,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 923,
                'name' => 'Campo Elías',
                'status' => 'A',
                'regions_id' => 377,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'name' => 'Arnoldo Gabaldón',
                'status' => 'A',
                'regions_id' => 377,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'name' => 'Santa Apolonia',
                'status' => 'A',
                'regions_id' => 378,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 926,
                'name' => 'El Progreso',
                'status' => 'A',
                'regions_id' => 378,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 927,
                'name' => 'La Ceiba',
                'status' => 'A',
                'regions_id' => 378,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 928,
                'name' => 'Tres de Febrero',
                'status' => 'A',
                'regions_id' => 378,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 929,
                'name' => 'El Dividive',
                'status' => 'A',
                'regions_id' => 379,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 930,
                'name' => 'Agua Santa',
                'status' => 'A',
                'regions_id' => 379,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 931,
                'name' => 'Agua Caliente',
                'status' => 'A',
                'regions_id' => 379,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 932,
                'name' => 'El Cenizo',
                'status' => 'A',
                'regions_id' => 379,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 933,
                'name' => 'Valerita',
                'status' => 'A',
                'regions_id' => 379,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 934,
                'name' => 'Monte Carmelo',
                'status' => 'A',
                'regions_id' => 380,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 935,
                'name' => 'Buena Vista',
                'status' => 'A',
                'regions_id' => 380,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 936,
                'name' => 'Santa María del Horcón',
                'status' => 'A',
                'regions_id' => 380,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 937,
                'name' => 'Motatán',
                'status' => 'A',
                'regions_id' => 381,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 938,
                'name' => 'El Baño',
                'status' => 'A',
                'regions_id' => 381,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 939,
                'name' => 'Jalisco',
                'status' => 'A',
                'regions_id' => 381,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 940,
                'name' => 'Pampán',
                'status' => 'A',
                'regions_id' => 382,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 941,
                'name' => 'Flor de Patria',
                'status' => 'A',
                'regions_id' => 382,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 942,
                'name' => 'La Paz',
                'status' => 'A',
                'regions_id' => 382,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 943,
                'name' => 'Santa Ana',
                'status' => 'A',
                'regions_id' => 382,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 944,
                'name' => 'Pampanito',
                'status' => 'A',
                'regions_id' => 383,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 945,
                'name' => 'La Concepción',
                'status' => 'A',
                'regions_id' => 383,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 946,
                'name' => 'Pampanito II',
                'status' => 'A',
                'regions_id' => 383,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 947,
                'name' => 'Betijoque',
                'status' => 'A',
                'regions_id' => 384,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 948,
                'name' => 'José Gregorio Hernández',
                'status' => 'A',
                'regions_id' => 384,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 949,
                'name' => 'La Pueblita',
                'status' => 'A',
                'regions_id' => 384,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 950,
                'name' => 'Los Cedros',
                'status' => 'A',
                'regions_id' => 384,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 951,
                'name' => 'Carvajal',
                'status' => 'A',
                'regions_id' => 385,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 952,
                'name' => 'Campo Alegre',
                'status' => 'A',
                'regions_id' => 385,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 953,
                'name' => 'Antonio Nicolás Briceño',
                'status' => 'A',
                'regions_id' => 385,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 954,
                'name' => 'José Leonardo Suárez',
                'status' => 'A',
                'regions_id' => 385,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 955,
                'name' => 'Sabana de Mendoza',
                'status' => 'A',
                'regions_id' => 386,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 956,
                'name' => 'Junín',
                'status' => 'A',
                'regions_id' => 386,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 957,
                'name' => 'Valmore Rodríguez',
                'status' => 'A',
                'regions_id' => 386,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'name' => 'El Paraíso',
                'status' => 'A',
                'regions_id' => 386,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 959,
                'name' => 'Andrés Linares',
                'status' => 'A',
                'regions_id' => 387,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 960,
                'name' => 'Chiquinquirá',
                'status' => 'A',
                'regions_id' => 387,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 961,
                'name' => 'Cristóbal Mendoza',
                'status' => 'A',
                'regions_id' => 387,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 962,
                'name' => 'Cruz Carrillo',
                'status' => 'A',
                'regions_id' => 387,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 963,
                'name' => 'Matriz',
                'status' => 'A',
                'regions_id' => 387,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 964,
                'name' => 'Monseñor Carrillo',
                'status' => 'A',
                'regions_id' => 387,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 965,
                'name' => 'Tres Esquinas',
                'status' => 'A',
                'regions_id' => 387,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 966,
                'name' => 'Cabimbú',
                'status' => 'A',
                'regions_id' => 388,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 967,
                'name' => 'Jajó',
                'status' => 'A',
                'regions_id' => 388,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 968,
                'name' => 'La Mesa de Esnujaque',
                'status' => 'A',
                'regions_id' => 388,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 969,
                'name' => 'Santiago',
                'status' => 'A',
                'regions_id' => 388,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 970,
                'name' => 'Tuñame',
                'status' => 'A',
                'regions_id' => 388,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 971,
                'name' => 'La Quebrada',
                'status' => 'A',
                'regions_id' => 388,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 972,
                'name' => 'Juan Ignacio Montilla',
                'status' => 'A',
                'regions_id' => 389,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 973,
                'name' => 'La Beatriz',
                'status' => 'A',
                'regions_id' => 389,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 974,
                'name' => 'La Puerta',
                'status' => 'A',
                'regions_id' => 389,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 975,
                'name' => 'Mendoza del Valle de Momboy',
                'status' => 'A',
                'regions_id' => 389,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 976,
                'name' => 'Mercedes Díaz',
                'status' => 'A',
                'regions_id' => 389,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 977,
                'name' => 'San Luis',
                'status' => 'A',
                'regions_id' => 389,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 978,
                'name' => 'Caraballeda',
                'status' => 'A',
                'regions_id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 979,
                'name' => 'Carayaca',
                'status' => 'A',
                'regions_id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 980,
                'name' => 'Carlos Soublette',
                'status' => 'A',
                'regions_id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 981,
                'name' => 'Caruao Chuspa',
                'status' => 'A',
                'regions_id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 982,
                'name' => 'Catia La Mar',
                'status' => 'A',
                'regions_id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 983,
                'name' => 'El Junko',
                'status' => 'A',
                'regions_id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 984,
                'name' => 'La Guaira',
                'status' => 'A',
                'regions_id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 985,
                'name' => 'Macuto',
                'status' => 'A',
                'regions_id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 986,
                'name' => 'Maiquetía',
                'status' => 'A',
                'regions_id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 987,
                'name' => 'Naiguatá',
                'status' => 'A',
                'regions_id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 988,
                'name' => 'Urimare',
                'status' => 'A',
                'regions_id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 989,
                'name' => 'Arístides Bastidas',
                'status' => 'A',
                'regions_id' => 391,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 990,
                'name' => 'Bolívar',
                'status' => 'A',
                'regions_id' => 392,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 991,
                'name' => 'Chivacoa',
                'status' => 'A',
                'regions_id' => 407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 992,
                'name' => 'Campo Elías',
                'status' => 'A',
                'regions_id' => 407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 993,
                'name' => 'Cocorote',
                'status' => 'A',
                'regions_id' => 408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 994,
                'name' => 'Independencia',
                'status' => 'A',
                'regions_id' => 409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 995,
                'name' => 'José Antonio Páez',
                'status' => 'A',
                'regions_id' => 410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'name' => 'La Trinidad',
                'status' => 'A',
                'regions_id' => 411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 997,
                'name' => 'Manuel Monge',
                'status' => 'A',
                'regions_id' => 412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'name' => 'Salóm',
                'status' => 'A',
                'regions_id' => 413,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 999,
                'name' => 'Temerla',
                'status' => 'A',
                'regions_id' => 413,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1000,
                'name' => 'Nirgua',
                'status' => 'A',
                'regions_id' => 413,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'name' => 'San Andrés',
                'status' => 'A',
                'regions_id' => 414,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1002,
                'name' => 'Yaritagua',
                'status' => 'A',
                'regions_id' => 414,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1003,
                'name' => 'San Javier',
                'status' => 'A',
                'regions_id' => 415,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1004,
                'name' => 'Albarico',
                'status' => 'A',
                'regions_id' => 415,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1005,
                'name' => 'San Felipe',
                'status' => 'A',
                'regions_id' => 415,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1006,
                'name' => 'Sucre',
                'status' => 'A',
                'regions_id' => 416,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1007,
                'name' => 'Urachiche',
                'status' => 'A',
                'regions_id' => 417,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1008,
                'name' => 'El Guayabo',
                'status' => 'A',
                'regions_id' => 418,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1009,
                'name' => 'Farriar',
                'status' => 'A',
                'regions_id' => 418,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010,
                'name' => 'Isla de Toas',
                'status' => 'A',
                'regions_id' => 441,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'name' => 'Monagas',
                'status' => 'A',
                'regions_id' => 441,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1012,
                'name' => 'San Timoteo',
                'status' => 'A',
                'regions_id' => 442,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1013,
                'name' => 'General Urdaneta',
                'status' => 'A',
                'regions_id' => 442,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1014,
                'name' => 'Libertador',
                'status' => 'A',
                'regions_id' => 442,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1015,
                'name' => 'Marcelino Briceño',
                'status' => 'A',
                'regions_id' => 442,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1016,
                'name' => 'Pueblo Nuevo',
                'status' => 'A',
                'regions_id' => 442,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1017,
                'name' => 'Manuel Guanipa Matos',
                'status' => 'A',
                'regions_id' => 442,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1018,
                'name' => 'Ambrosio',
                'status' => 'A',
                'regions_id' => 443,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1019,
                'name' => 'Carmen Herrera',
                'status' => 'A',
                'regions_id' => 443,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1020,
                'name' => 'La Rosa',
                'status' => 'A',
                'regions_id' => 443,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'name' => 'Germán Ríos Linares',
                'status' => 'A',
                'regions_id' => 443,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1022,
                'name' => 'San Benito',
                'status' => 'A',
                'regions_id' => 443,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'name' => 'Rómulo Betancourt',
                'status' => 'A',
                'regions_id' => 443,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1024,
                'name' => 'Jorge Hernández',
                'status' => 'A',
                'regions_id' => 443,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1025,
                'name' => 'Punta Gorda',
                'status' => 'A',
                'regions_id' => 443,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1026,
                'name' => 'Arístides Calvani',
                'status' => 'A',
                'regions_id' => 443,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1027,
                'name' => 'Encontrados',
                'status' => 'A',
                'regions_id' => 444,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1028,
                'name' => 'Udón Pérez',
                'status' => 'A',
                'regions_id' => 444,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'name' => 'Moralito',
                'status' => 'A',
                'regions_id' => 445,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
                'name' => 'San Carlos del Zulia',
                'status' => 'A',
                'regions_id' => 445,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1031,
                'name' => 'Santa Cruz del Zulia',
                'status' => 'A',
                'regions_id' => 445,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1032,
                'name' => 'Santa Bárbara',
                'status' => 'A',
                'regions_id' => 445,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1033,
                'name' => 'Urribarrí',
                'status' => 'A',
                'regions_id' => 445,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1034,
                'name' => 'Carlos Quevedo',
                'status' => 'A',
                'regions_id' => 446,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'name' => 'Francisco Javier Pulgar',
                'status' => 'A',
                'regions_id' => 446,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'name' => 'Simón Rodríguez',
                'status' => 'A',
                'regions_id' => 446,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1037,
                'name' => 'Guamo-Gavilanes',
                'status' => 'A',
                'regions_id' => 446,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1038,
                'name' => 'La Concepción',
                'status' => 'A',
                'regions_id' => 448,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'name' => 'San José',
                'status' => 'A',
                'regions_id' => 448,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'name' => 'Mariano Parra León',
                'status' => 'A',
                'regions_id' => 448,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1041,
                'name' => 'José Ramón Yépez',
                'status' => 'A',
                'regions_id' => 448,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1042,
                'name' => 'Jesús María Semprún',
                'status' => 'A',
                'regions_id' => 449,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'name' => 'Barí',
                'status' => 'A',
                'regions_id' => 449,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1044,
                'name' => 'Concepción',
                'status' => 'A',
                'regions_id' => 450,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1045,
                'name' => 'Andrés Bello',
                'status' => 'A',
                'regions_id' => 450,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1046,
                'name' => 'Chiquinquirá',
                'status' => 'A',
                'regions_id' => 450,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1047,
                'name' => 'El Carmelo',
                'status' => 'A',
                'regions_id' => 450,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1048,
                'name' => 'Potreritos',
                'status' => 'A',
                'regions_id' => 450,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1049,
                'name' => 'Libertad',
                'status' => 'A',
                'regions_id' => 451,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1050,
                'name' => 'Alonso de Ojeda',
                'status' => 'A',
                'regions_id' => 451,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1051,
                'name' => 'Venezuela',
                'status' => 'A',
                'regions_id' => 451,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1052,
                'name' => 'Eleazar López Contreras',
                'status' => 'A',
                'regions_id' => 451,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1053,
                'name' => 'Campo Lara',
                'status' => 'A',
                'regions_id' => 451,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1054,
                'name' => 'Bartolomé de las Casas',
                'status' => 'A',
                'regions_id' => 452,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1055,
                'name' => 'Libertad',
                'status' => 'A',
                'regions_id' => 452,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'name' => 'Río Negro',
                'status' => 'A',
                'regions_id' => 452,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1057,
                'name' => 'San José de Perijá',
                'status' => 'A',
                'regions_id' => 452,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1058,
                'name' => 'San Rafael',
                'status' => 'A',
                'regions_id' => 453,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1059,
                'name' => 'La Sierrita',
                'status' => 'A',
                'regions_id' => 453,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1060,
                'name' => 'Las Parcelas',
                'status' => 'A',
                'regions_id' => 453,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1061,
                'name' => 'Luis de Vicente',
                'status' => 'A',
                'regions_id' => 453,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1062,
                'name' => 'Monseñor Marcos Sergio Godoy',
                'status' => 'A',
                'regions_id' => 453,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1063,
                'name' => 'Ricaurte',
                'status' => 'A',
                'regions_id' => 453,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1064,
                'name' => 'Tamare',
                'status' => 'A',
                'regions_id' => 453,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1065,
                'name' => 'Antonio Borjas Romero',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1066,
                'name' => 'Bolívar',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1067,
                'name' => 'Cacique Mara',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1068,
                'name' => 'Carracciolo Parra Pérez',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1069,
                'name' => 'Cecilio Acosta',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1070,
                'name' => 'Cristo de Aranza',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1071,
                'name' => 'Coquivacoa',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1072,
                'name' => 'Chiquinquirá',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1073,
                'name' => 'Francisco Eugenio Bustamante',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1074,
                'name' => 'Idelfonzo Vásquez',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1075,
                'name' => 'Juana de Ávila',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1076,
                'name' => 'Luis Hurtado Higuera',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1077,
                'name' => 'Manuel Dagnino',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1078,
                'name' => 'Olegario Villalobos',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1079,
                'name' => 'Raúl Leoni',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1080,
                'name' => 'Santa Lucía',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1081,
                'name' => 'Venancio Pulgar',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1082,
                'name' => 'San Isidro',
                'status' => 'A',
                'regions_id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1083,
                'name' => 'Altagracia',
                'status' => 'A',
                'regions_id' => 455,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1084,
                'name' => 'Faría',
                'status' => 'A',
                'regions_id' => 455,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1085,
                'name' => 'Ana María Campos',
                'status' => 'A',
                'regions_id' => 455,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1086,
                'name' => 'San Antonio',
                'status' => 'A',
                'regions_id' => 455,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1087,
                'name' => 'San José',
                'status' => 'A',
                'regions_id' => 455,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1088,
                'name' => 'Donaldo García',
                'status' => 'A',
                'regions_id' => 456,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1089,
                'name' => 'El Rosario',
                'status' => 'A',
                'regions_id' => 456,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1090,
                'name' => 'Sixto Zambrano',
                'status' => 'A',
                'regions_id' => 456,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1091,
                'name' => 'San Francisco',
                'status' => 'A',
                'regions_id' => 457,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'name' => 'El Bajo',
                'status' => 'A',
                'regions_id' => 457,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1093,
                'name' => 'Domitila Flores',
                'status' => 'A',
                'regions_id' => 457,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1094,
                'name' => 'Francisco Ochoa',
                'status' => 'A',
                'regions_id' => 457,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1095,
                'name' => 'Los Cortijos',
                'status' => 'A',
                'regions_id' => 457,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1096,
                'name' => 'Marcial Hernández',
                'status' => 'A',
                'regions_id' => 457,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1097,
                'name' => 'Santa Rita',
                'status' => 'A',
                'regions_id' => 458,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1098,
                'name' => 'El Mene',
                'status' => 'A',
                'regions_id' => 458,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1099,
                'name' => 'Pedro Lucas Urribarrí',
                'status' => 'A',
                'regions_id' => 458,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1100,
                'name' => 'José Cenobio Urribarrí',
                'status' => 'A',
                'regions_id' => 458,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1101,
                'name' => 'Rafael Maria Baralt',
                'status' => 'A',
                'regions_id' => 459,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1102,
                'name' => 'Manuel Manrique',
                'status' => 'A',
                'regions_id' => 459,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1103,
                'name' => 'Rafael Urdaneta',
                'status' => 'A',
                'regions_id' => 459,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1104,
                'name' => 'Bobures',
                'status' => 'A',
                'regions_id' => 460,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1105,
                'name' => 'Gibraltar',
                'status' => 'A',
                'regions_id' => 460,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1106,
                'name' => 'Heras',
                'status' => 'A',
                'regions_id' => 460,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1107,
                'name' => 'Monseñor Arturo Álvarez',
                'status' => 'A',
                'regions_id' => 460,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1108,
                'name' => 'Rómulo Gallegos',
                'status' => 'A',
                'regions_id' => 460,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1109,
                'name' => 'El Batey',
                'status' => 'A',
                'regions_id' => 460,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1110,
                'name' => 'Rafael Urdaneta',
                'status' => 'A',
                'regions_id' => 461,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1111,
                'name' => 'La Victoria',
                'status' => 'A',
                'regions_id' => 461,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1112,
                'name' => 'Raúl Cuenca',
                'status' => 'A',
                'regions_id' => 461,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1113,
                'name' => 'Sinamaica',
                'status' => 'A',
                'regions_id' => 447,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1114,
                'name' => 'Alta Guajira',
                'status' => 'A',
                'regions_id' => 447,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1115,
                'name' => 'Elías Sánchez Rubio',
                'status' => 'A',
                'regions_id' => 447,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1116,
                'name' => 'Guajira',
                'status' => 'A',
                'regions_id' => 447,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1117,
                'name' => 'Altagracia',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1118,
                'name' => 'Antímano',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1119,
                'name' => 'Caricuao',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1120,
                'name' => 'Catedral',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1121,
                'name' => 'Coche',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1122,
                'name' => 'El Junquito',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1123,
                'name' => 'El Paraíso',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1124,
                'name' => 'El Recreo',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1125,
                'name' => 'El Valle',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1126,
                'name' => 'La Candelaria',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1127,
                'name' => 'La Pastora',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1128,
                'name' => 'La Vega',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1129,
                'name' => 'Macarao',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1130,
                'name' => 'San Agustín',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1131,
                'name' => 'San Bernardino',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1132,
                'name' => 'San José',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1133,
                'name' => 'San Juan',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1134,
                'name' => 'San Pedro',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1135,
                'name' => 'Santa Rosalía',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1136,
                'name' => 'Santa Teresa',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1137,
            'name' => 'Sucre (Catia)',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1138,
                'name' => '23 de enero',
                'status' => 'A',
                'regions_id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}