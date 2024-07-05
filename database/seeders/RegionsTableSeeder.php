<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Alto Orinoco',
                'status' => 'A',
                'states_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Atabapo',
                'status' => 'A',
                'states_id' => 1,
                'created_at' => '2020-01-24 03:11:33',
                'updated_at' => '2020-01-24 03:11:33',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Atures',
                'status' => 'A',
                'states_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Autana',
                'status' => 'A',
                'states_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Manapiare',
                'status' => 'A',
                'states_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Maroa',
                'status' => 'A',
                'states_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Río Negro',
                'status' => 'A',
                'states_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Anaco',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Aragua',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Manuel Ezequiel Bruzual',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Diego Bautista Urbaneja',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Fernando Peñalver',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Francisco Del Carmen Carvajal',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'General Sir Arthur McGregor',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Guanta',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Independencia',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'José Gregorio Monagas',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Juan Antonio Sotillo',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Juan Manuel Cajigal',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Libertad',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Francisco de Miranda',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Pedro María Freites',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Píritu',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'San José de Guanipa',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'San Juan de Capistrano',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Santa Ana',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Simón Bolívar',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Simón Rodríguez',
                'status' => 'A',
                'states_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Achaguas',
                'status' => 'A',
                'states_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Biruaca',
                'status' => 'A',
                'states_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Muñóz',
                'status' => 'A',
                'states_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Páez',
                'status' => 'A',
                'states_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Pedro Camejo',
                'status' => 'A',
                'states_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Rómulo Gallegos',
                'status' => 'A',
                'states_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'San Fernando',
                'status' => 'A',
                'states_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Atanasio Girardot',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Bolívar',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Camatagua',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Francisco Linares Alcántara',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'José Ángel Lamas',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'José Félix Ribas',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'José Rafael Revenga',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Libertador',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Mario Briceño Iragorry',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Ocumare de la Costa de Oro',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'San Casimiro',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'San Sebastián',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Santiago Mariño',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Santos Michelena',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Sucre',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Tovar',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Urdaneta',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Zamora',
                'status' => 'A',
                'states_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Alberto Arvelo Torrealba',
                'status' => 'A',
                'states_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Andrés Eloy Blanco',
                'status' => 'A',
                'states_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Antonio José de Sucre',
                'status' => 'A',
                'states_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Arismendi',
                'status' => 'A',
                'states_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Barinas',
                'status' => 'A',
                'states_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Bolívar',
                'status' => 'A',
                'states_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Cruz Paredes',
                'status' => 'A',
                'states_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Ezequiel Zamora',
                'status' => 'A',
                'states_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Obispos',
                'status' => 'A',
                'states_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Pedraza',
                'status' => 'A',
                'states_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Rojas',
                'status' => 'A',
                'states_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Sosa',
                'status' => 'A',
                'states_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Caroní',
                'status' => 'A',
                'states_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Cedeño',
                'status' => 'A',
                'states_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'El Callao',
                'status' => 'A',
                'states_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Gran Sabana',
                'status' => 'A',
                'states_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Heres',
                'status' => 'A',
                'states_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Piar',
                'status' => 'A',
                'states_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
            'name' => 'Angostura (Raúl Leoni)',
                'status' => 'A',
                'states_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Roscio',
                'status' => 'A',
                'states_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Sifontes',
                'status' => 'A',
                'states_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Sucre',
                'status' => 'A',
                'states_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Padre Pedro Chien',
                'status' => 'A',
                'states_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Bejuma',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Carlos Arvelo',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Diego Ibarra',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Guacara',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Juan José Mora',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Libertador',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Los Guayos',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Miranda',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Montalbán',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Naguanagua',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Puerto Cabello',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'San Diego',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'San Joaquín',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Valencia',
                'status' => 'A',
                'states_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Anzoátegui',
                'status' => 'A',
                'states_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Tinaquillo',
                'status' => 'A',
                'states_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Girardot',
                'status' => 'A',
                'states_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Lima Blanco',
                'status' => 'A',
                'states_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Pao de San Juan Bautista',
                'status' => 'A',
                'states_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Ricaurte',
                'status' => 'A',
                'states_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Rómulo Gallegos',
                'status' => 'A',
                'states_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'San Carlos',
                'status' => 'A',
                'states_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Tinaco',
                'status' => 'A',
                'states_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Antonio Díaz',
                'status' => 'A',
                'states_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Casacoima',
                'status' => 'A',
                'states_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Pedernales',
                'status' => 'A',
                'states_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Tucupita',
                'status' => 'A',
                'states_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Acosta',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Bolívar',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Buchivacoa',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Cacique Manaure',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Carirubana',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Colina',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Dabajuro',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Democracia',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Falcón',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Federación',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Jacura',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'José Laurencio Silva',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Los Taques',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Mauroa',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Miranda',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Monseñor Iturriza',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Palmasola',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Petit',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Píritu',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'San Francisco',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Sucre',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Tocópero',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Unión',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Urumaco',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Zamora',
                'status' => 'A',
                'states_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Camaguán',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Chaguaramas',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'El Socorro',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'José Félix Ribas',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'José Tadeo Monagas',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Juan Germán Roscio',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Julián Mellado',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Las Mercedes',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Leonardo Infante',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Pedro Zaraza',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Ortíz',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'San Gerónimo de Guayabal',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'San José de Guaribe',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Santa María de Ipire',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Sebastián Francisco de Miranda',
                'status' => 'A',
                'states_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Andrés Eloy Blanco',
                'status' => 'A',
                'states_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Crespo',
                'status' => 'A',
                'states_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Iribarren',
                'status' => 'A',
                'states_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Jiménez',
                'status' => 'A',
                'states_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Morán',
                'status' => 'A',
                'states_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Palavecino',
                'status' => 'A',
                'states_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Simón Planas',
                'status' => 'A',
                'states_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Torres',
                'status' => 'A',
                'states_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Urdaneta',
                'status' => 'A',
                'states_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 179,
                'name' => 'Alberto Adriani',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 180,
                'name' => 'Andrés Bello',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 181,
                'name' => 'Antonio Pinto Salinas',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 182,
                'name' => 'Aricagua',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 183,
                'name' => 'Arzobispo Chacón',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 184,
                'name' => 'Campo Elías',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 185,
                'name' => 'Caracciolo Parra Olmedo',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 186,
                'name' => 'Cardenal Quintero',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 187,
                'name' => 'Guaraque',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 188,
                'name' => 'Julio César Salas',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 189,
                'name' => 'Justo Briceño',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 190,
                'name' => 'Libertador',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 191,
                'name' => 'Miranda',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 192,
                'name' => 'Obispo Ramos de Lora',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 193,
                'name' => 'Padre Noguera',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 194,
                'name' => 'Pueblo Llano',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 195,
                'name' => 'Rangel',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 196,
                'name' => 'Rivas Dávila',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 197,
                'name' => 'Santos Marquina',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 198,
                'name' => 'Sucre',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 199,
                'name' => 'Tovar',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 200,
                'name' => 'Tulio Febres Cordero',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 201,
                'name' => 'Zea',
                'status' => 'A',
                'states_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 223,
                'name' => 'Acevedo',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 224,
                'name' => 'Andrés Bello',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 225,
                'name' => 'Baruta',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 226,
                'name' => 'Brión',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 227,
                'name' => 'Buroz',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 228,
                'name' => 'Carrizal',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 229,
                'name' => 'Chacao',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 230,
                'name' => 'Cristóbal Rojas',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 231,
                'name' => 'El Hatillo',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 232,
                'name' => 'Guaicaipuro',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 233,
                'name' => 'Independencia',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 234,
                'name' => 'Lander',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 235,
                'name' => 'Los Salias',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 236,
                'name' => 'Páez',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 237,
                'name' => 'Paz Castillo',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 238,
                'name' => 'Pedro Gual',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 239,
                'name' => 'Plaza',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 240,
                'name' => 'Simón Bolívar',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 241,
                'name' => 'Sucre',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 242,
                'name' => 'Urdaneta',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 243,
                'name' => 'Zamora',
                'status' => 'A',
                'states_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 258,
                'name' => 'Acosta',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 259,
                'name' => 'Aguasay',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 260,
                'name' => 'Bolívar',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 261,
                'name' => 'Caripe',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 262,
                'name' => 'Cedeño',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 263,
                'name' => 'Ezequiel Zamora',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 264,
                'name' => 'Libertador',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 265,
                'name' => 'Maturín',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 266,
                'name' => 'Piar',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 267,
                'name' => 'Punceres',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 268,
                'name' => 'Santa Bárbara',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 269,
                'name' => 'Sotillo',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 270,
                'name' => 'Uracoa',
                'status' => 'A',
                'states_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 271,
                'name' => 'Antolín del Campo',
                'status' => 'A',
                'states_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 272,
                'name' => 'Arismendi',
                'status' => 'A',
                'states_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 273,
                'name' => 'García',
                'status' => 'A',
                'states_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 274,
                'name' => 'Gómez',
                'status' => 'A',
                'states_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 275,
                'name' => 'Maneiro',
                'status' => 'A',
                'states_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 276,
                'name' => 'Marcano',
                'status' => 'A',
                'states_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 277,
                'name' => 'Mariño',
                'status' => 'A',
                'states_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 278,
                'name' => 'Península de Macanao',
                'status' => 'A',
                'states_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 279,
                'name' => 'Tubores',
                'status' => 'A',
                'states_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 280,
                'name' => 'Villalba',
                'status' => 'A',
                'states_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 281,
                'name' => 'Díaz',
                'status' => 'A',
                'states_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 282,
                'name' => 'Agua Blanca',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 283,
                'name' => 'Araure',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 284,
                'name' => 'Esteller',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 285,
                'name' => 'Guanare',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 286,
                'name' => 'Guanarito',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 287,
                'name' => 'Monseñor José Vicente de Unda',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 288,
                'name' => 'Ospino',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 289,
                'name' => 'Páez',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 290,
                'name' => 'Papelón',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 291,
                'name' => 'San Genaro de Boconoíto',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 292,
                'name' => 'San Rafael de Onoto',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 293,
                'name' => 'Santa Rosalía',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 294,
                'name' => 'Sucre',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 295,
                'name' => 'Turén',
                'status' => 'A',
                'states_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 296,
                'name' => 'Andrés Eloy Blanco',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 297,
                'name' => 'Andrés Mata',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 298,
                'name' => 'Arismendi',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 299,
                'name' => 'Benítez',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 300,
                'name' => 'Bermúdez',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 301,
                'name' => 'Bolívar',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 302,
                'name' => 'Cajigal',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 303,
                'name' => 'Cruz Salmerón Acosta',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 304,
                'name' => 'Libertador',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 305,
                'name' => 'Mariño',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 306,
                'name' => 'Mejía',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 307,
                'name' => 'Montes',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 308,
                'name' => 'Ribero',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 309,
                'name' => 'Sucre',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 310,
                'name' => 'Valdéz',
                'status' => 'A',
                'states_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 341,
                'name' => 'Andrés Bello',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 342,
                'name' => 'Antonio Rómulo Costa',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 343,
                'name' => 'Ayacucho',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 344,
                'name' => 'Bolívar',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 345,
                'name' => 'Cárdenas',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 346,
                'name' => 'Córdoba',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 347,
                'name' => 'Fernández Feo',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 348,
                'name' => 'Francisco de Miranda',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 349,
                'name' => 'García de Hevia',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 350,
                'name' => 'Guásimos',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 351,
                'name' => 'Independencia',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 352,
                'name' => 'Jáuregui',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 353,
                'name' => 'José María Vargas',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 354,
                'name' => 'Junín',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 355,
                'name' => 'Libertad',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 356,
                'name' => 'Libertador',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 357,
                'name' => 'Lobatera',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 358,
                'name' => 'Michelena',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 359,
                'name' => 'Panamericano',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 360,
                'name' => 'Pedro María Ureña',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 361,
                'name' => 'Rafael Urdaneta',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 362,
                'name' => 'Samuel Darío Maldonado',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 363,
                'name' => 'San Cristóbal',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 364,
                'name' => 'Seboruco',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 365,
                'name' => 'Simón Rodríguez',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 366,
                'name' => 'Sucre',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 367,
                'name' => 'Torbes',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 368,
                'name' => 'Uribante',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 369,
                'name' => 'San Judas Tadeo',
                'status' => 'A',
                'states_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 370,
                'name' => 'Andrés Bello',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 371,
                'name' => 'Boconó',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 372,
                'name' => 'Bolívar',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 373,
                'name' => 'Candelaria',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 374,
                'name' => 'Carache',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 375,
                'name' => 'Escuque',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 376,
                'name' => 'José Felipe Márquez Cañizalez',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 377,
                'name' => 'Juan Vicente Campos Elías',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 378,
                'name' => 'La Ceiba',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 379,
                'name' => 'Miranda',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 380,
                'name' => 'Monte Carmelo',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 381,
                'name' => 'Motatán',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 382,
                'name' => 'Pampán',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 383,
                'name' => 'Pampanito',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 384,
                'name' => 'Rafael Rangel',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 385,
                'name' => 'San Rafael de Carvajal',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 386,
                'name' => 'Sucre',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 387,
                'name' => 'Trujillo',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 388,
                'name' => 'Urdaneta',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 389,
                'name' => 'Valera',
                'status' => 'A',
                'states_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 390,
                'name' => 'Vargas',
                'status' => 'A',
                'states_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 391,
                'name' => 'Arístides Bastidas',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 392,
                'name' => 'Bolívar',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 407,
                'name' => 'Bruzual',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 408,
                'name' => 'Cocorote',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 409,
                'name' => 'Independencia',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 410,
                'name' => 'José Antonio Páez',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 411,
                'name' => 'La Trinidad',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 412,
                'name' => 'Manuel Monge',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 413,
                'name' => 'Nirgua',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 414,
                'name' => 'Peña',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 415,
                'name' => 'San Felipe',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 416,
                'name' => 'Sucre',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 417,
                'name' => 'Urachiche',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 418,
                'name' => 'José Joaquín Veroes',
                'status' => 'A',
                'states_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 441,
                'name' => 'Almirante Padilla',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 442,
                'name' => 'Baralt',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 443,
                'name' => 'Cabimas',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 444,
                'name' => 'Catatumbo',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 445,
                'name' => 'Colón',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 446,
                'name' => 'Francisco Javier Pulgar',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 447,
                'name' => 'Páez',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 448,
                'name' => 'Jesús Enrique Losada',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 449,
                'name' => 'Jesús María Semprún',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 450,
                'name' => 'La Cañada de Urdaneta',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 451,
                'name' => 'Lagunillas',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 452,
                'name' => 'Machiques de Perijá',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 453,
                'name' => 'Mara',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 454,
                'name' => 'Maracaibo',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 455,
                'name' => 'Miranda',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 456,
                'name' => 'Rosario de Perijá',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 457,
                'name' => 'San Francisco',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 458,
                'name' => 'Santa Rita',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 459,
                'name' => 'Simón Bolívar',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 460,
                'name' => 'Sucre',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 461,
                'name' => 'Valmore Rodríguez',
                'status' => 'A',
                'states_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 462,
                'name' => 'Libertador',
                'status' => 'A',
                'states_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}