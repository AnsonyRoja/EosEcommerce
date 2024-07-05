<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrackingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trackings')->delete();
        
        \DB::table('trackings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => NULL,
                'orders_id' => 1,
                'orders_status_id' => 1,
                'users_id' => 20,
                'created_at' => '2020-04-16 17:01:36',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'description' => NULL,
                'orders_id' => 2,
                'orders_status_id' => 1,
                'users_id' => 20,
                'created_at' => '2020-04-16 17:41:32',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'description' => NULL,
                'orders_id' => 2,
                'orders_status_id' => 2,
                'users_id' => 20,
                'created_at' => '2020-04-16 18:19:26',
                'updated_at' => '2020-04-16 18:19:26',
            ),
            3 => 
            array (
                'id' => 4,
                'description' => NULL,
                'orders_id' => 2,
                'orders_status_id' => 11,
                'users_id' => 20,
                'created_at' => '2020-04-16 18:20:21',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'description' => NULL,
                'orders_id' => 1,
                'orders_status_id' => 2,
                'users_id' => 20,
                'created_at' => '2020-04-16 18:32:37',
                'updated_at' => '2020-04-16 18:32:37',
            ),
            5 => 
            array (
                'id' => 6,
                'description' => NULL,
                'orders_id' => 3,
                'orders_status_id' => 1,
                'users_id' => 20,
                'created_at' => '2020-04-16 18:33:05',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'description' => NULL,
                'orders_id' => 3,
                'orders_status_id' => 2,
                'users_id' => 20,
                'created_at' => '2020-04-16 19:36:22',
                'updated_at' => '2020-04-16 19:36:22',
            ),
            7 => 
            array (
                'id' => 8,
                'description' => NULL,
                'orders_id' => 4,
                'orders_status_id' => 1,
                'users_id' => 20,
                'created_at' => '2020-04-16 19:40:32',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'description' => NULL,
                'orders_id' => 4,
                'orders_status_id' => 2,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:09:56',
                'updated_at' => '2020-04-16 20:09:56',
            ),
            9 => 
            array (
                'id' => 10,
                'description' => NULL,
                'orders_id' => 5,
                'orders_status_id' => 1,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:12:17',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'description' => NULL,
                'orders_id' => 5,
                'orders_status_id' => 2,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:12:29',
                'updated_at' => '2020-04-16 20:12:29',
            ),
            11 => 
            array (
                'id' => 12,
                'description' => NULL,
                'orders_id' => 5,
                'orders_status_id' => 11,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:16:08',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'description' => NULL,
                'orders_id' => 6,
                'orders_status_id' => 1,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:16:44',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'description' => NULL,
                'orders_id' => 6,
                'orders_status_id' => 11,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:16:50',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'description' => NULL,
                'orders_id' => 7,
                'orders_status_id' => 1,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:16:57',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'description' => NULL,
                'orders_id' => 7,
                'orders_status_id' => 2,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:17:08',
                'updated_at' => '2020-04-16 20:17:08',
            ),
            16 => 
            array (
                'id' => 17,
                'description' => NULL,
                'orders_id' => 8,
                'orders_status_id' => 1,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:17:21',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'description' => NULL,
                'orders_id' => 8,
                'orders_status_id' => 2,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:17:31',
                'updated_at' => '2020-04-16 20:17:31',
            ),
            18 => 
            array (
                'id' => 19,
                'description' => NULL,
                'orders_id' => 9,
                'orders_status_id' => 1,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:18:19',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'description' => NULL,
                'orders_id' => 9,
                'orders_status_id' => 2,
                'users_id' => 20,
                'created_at' => '2020-04-16 20:18:43',
                'updated_at' => '2020-04-16 20:18:43',
            ),
            20 => 
            array (
                'id' => 21,
                'description' => NULL,
                'orders_id' => 10,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 09:45:07',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'description' => NULL,
                'orders_id' => 10,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 09:53:12',
                'updated_at' => '2020-04-17 09:53:12',
            ),
            22 => 
            array (
                'id' => 23,
                'description' => NULL,
                'orders_id' => 11,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:11:45',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'description' => NULL,
                'orders_id' => 11,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:15:11',
                'updated_at' => '2020-04-17 10:15:11',
            ),
            24 => 
            array (
                'id' => 25,
                'description' => NULL,
                'orders_id' => 12,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:16:49',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'description' => NULL,
                'orders_id' => 12,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:17:01',
                'updated_at' => '2020-04-17 10:17:01',
            ),
            26 => 
            array (
                'id' => 27,
                'description' => NULL,
                'orders_id' => 13,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:23:09',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:40:53',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:41:08',
                'updated_at' => '2020-04-17 10:41:08',
            ),
            29 => 
            array (
                'id' => 30,
                'description' => NULL,
                'orders_id' => 15,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:42:20',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'description' => NULL,
                'orders_id' => 15,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:43:53',
                'updated_at' => '2020-04-17 10:43:53',
            ),
            31 => 
            array (
                'id' => 32,
                'description' => NULL,
                'orders_id' => 16,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:44:50',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'description' => NULL,
                'orders_id' => 16,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:50:02',
                'updated_at' => '2020-04-17 10:50:02',
            ),
            33 => 
            array (
                'id' => 34,
                'description' => NULL,
                'orders_id' => 17,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:52:05',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'description' => NULL,
                'orders_id' => 17,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:55:26',
                'updated_at' => '2020-04-17 10:55:26',
            ),
            35 => 
            array (
                'id' => 36,
                'description' => NULL,
                'orders_id' => 13,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-17 10:56:52',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'description' => NULL,
                'orders_id' => 18,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 11:42:57',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'description' => NULL,
                'orders_id' => 18,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 11:43:15',
                'updated_at' => '2020-04-17 11:43:15',
            ),
            38 => 
            array (
                'id' => 40,
                'description' => NULL,
                'orders_id' => 18,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-17 11:54:00',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 41,
                'description' => NULL,
                'orders_id' => 19,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 11:54:58',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 42,
                'description' => NULL,
                'orders_id' => 19,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 11:55:17',
                'updated_at' => '2020-04-17 11:55:17',
            ),
            41 => 
            array (
                'id' => 43,
                'description' => NULL,
                'orders_id' => 18,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:00:35',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 44,
                'description' => NULL,
                'orders_id' => 19,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:03:21',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 45,
                'description' => NULL,
                'orders_id' => 20,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:04:15',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 46,
                'description' => NULL,
                'orders_id' => 20,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:04:39',
                'updated_at' => '2020-04-17 12:04:39',
            ),
            45 => 
            array (
                'id' => 50,
                'description' => '415714.29',
                'orders_id' => 20,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:23:37',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 51,
                'description' => NULL,
                'orders_id' => 21,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:24:29',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 52,
                'description' => NULL,
                'orders_id' => 21,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:24:44',
                'updated_at' => '2020-04-17 12:24:44',
            ),
            48 => 
            array (
                'id' => 53,
                'description' => '307889.98',
                'orders_id' => 21,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:25:04',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 54,
                'description' => NULL,
                'orders_id' => 22,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:25:29',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 55,
                'description' => NULL,
                'orders_id' => 22,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:25:45',
                'updated_at' => '2020-04-17 12:25:45',
            ),
            51 => 
            array (
                'id' => 56,
                'description' => NULL,
                'orders_id' => 23,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:26:42',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 57,
                'description' => NULL,
                'orders_id' => 24,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:27:07',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 58,
                'description' => NULL,
                'orders_id' => 23,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:27:23',
                'updated_at' => '2020-04-17 12:27:23',
            ),
            54 => 
            array (
                'id' => 59,
                'description' => '235200',
                'orders_id' => 23,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:28:09',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 60,
                'description' => NULL,
                'orders_id' => 24,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:29:23',
                'updated_at' => '2020-04-17 12:29:23',
            ),
            56 => 
            array (
                'id' => 61,
                'description' => '36415.72',
                'orders_id' => 24,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-17 12:29:50',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 62,
                'description' => NULL,
                'orders_id' => 25,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:05:55',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 63,
                'description' => NULL,
                'orders_id' => 25,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:06:14',
                'updated_at' => '2020-04-17 14:06:14',
            ),
            59 => 
            array (
                'id' => 64,
                'description' => NULL,
                'orders_id' => 25,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:11:14',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 65,
                'description' => NULL,
                'orders_id' => 26,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:12:21',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 66,
                'description' => NULL,
                'orders_id' => 26,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:12:35',
                'updated_at' => '2020-04-17 14:12:35',
            ),
            62 => 
            array (
                'id' => 67,
                'description' => NULL,
                'orders_id' => 26,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:12:47',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 68,
                'description' => NULL,
                'orders_id' => 26,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:14:18',
                'updated_at' => '2020-04-17 14:14:18',
            ),
            64 => 
            array (
                'id' => 69,
                'description' => 'Su pago ha sido rechazado',
                'orders_id' => 26,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:21:22',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 70,
                'description' => 'Su pago fue aprobado',
                'orders_id' => 26,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:29:14',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 71,
                'description' => 'Su pago fue aprobado',
                'orders_id' => 26,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:30:03',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 72,
                'description' => NULL,
                'orders_id' => 26,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:30:32',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 73,
                'description' => NULL,
                'orders_id' => 26,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:33:31',
                'updated_at' => '2020-04-17 14:33:31',
            ),
            69 => 
            array (
                'id' => 74,
                'description' => NULL,
                'orders_id' => 26,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:33:44',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 75,
                'description' => NULL,
                'orders_id' => 27,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:51:05',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 76,
                'description' => NULL,
                'orders_id' => 27,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-17 14:51:24',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 77,
                'description' => NULL,
                'orders_id' => 26,
                'orders_status_id' => 6,
                'users_id' => 16,
                'created_at' => '2020-04-17 15:26:33',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 78,
                'description' => NULL,
                'orders_id' => 26,
                'orders_status_id' => 7,
                'users_id' => 16,
                'created_at' => '2020-04-17 15:27:12',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 79,
                'description' => NULL,
                'orders_id' => 26,
                'orders_status_id' => 5,
                'users_id' => 16,
                'created_at' => '2020-04-17 15:31:45',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 80,
                'description' => NULL,
                'orders_id' => 26,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 15:32:08',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 81,
                'description' => NULL,
                'orders_id' => 26,
                'orders_status_id' => 12,
                'users_id' => 16,
                'created_at' => '2020-04-17 15:32:36',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 82,
                'description' => 'No lo encontramos en su casa',
                'orders_id' => 26,
                'orders_status_id' => 12,
                'users_id' => 16,
                'created_at' => '2020-04-17 15:33:04',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 83,
                'description' => 'No lo encontramos en su casa debe venir a nuestra locasd fds fasd fas df asdfasdf',
                'orders_id' => 26,
                'orders_status_id' => 12,
                'users_id' => 16,
                'created_at' => '2020-04-17 15:33:42',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 84,
                'description' => NULL,
                'orders_id' => 27,
                'orders_status_id' => 5,
                'users_id' => 16,
                'created_at' => '2020-04-17 15:52:44',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 85,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 16:20:18',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 86,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 17:32:51',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 87,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 17:32:57',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 88,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 17:32:59',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 89,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 17:36:03',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 90,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 18:10:37',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 91,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 18:11:30',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 92,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 18:11:52',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 93,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 18:17:57',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 94,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 18:17:59',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 95,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 18:21:32',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 96,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 18:21:53',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 97,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 18:24:54',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 98,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 18:29:48',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 99,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 18:32:04',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 100,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-17 18:36:06',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 101,
                'description' => NULL,
                'orders_id' => 17,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-20 09:38:59',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 102,
                'description' => NULL,
                'orders_id' => 27,
                'orders_status_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-20 09:39:19',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}