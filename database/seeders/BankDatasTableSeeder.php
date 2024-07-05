<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class BankDatasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bank_datas')->delete();
        
        \DB::table('bank_datas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'titular' => 'Biomercados',
                'description' => 'asdfsad 23412342342313214',
                'account_type' => 'C',
                'banks_id' => 1,
                'status' => 'A',
                'created_at' => '2020-04-16 21:43:00',
                'updated_at' => '2020-04-17 00:18:06',
                'payment_methods_id' => 1,
                'coins_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'titular' => 'Biomercados',
                'description' => 'Paga en casa o en nuestra tienda BIO',
                'account_type' => 'O',
                'banks_id' => 3,
                'status' => 'A',
                'created_at' => '2020-04-17 13:44:43',
                'updated_at' => '2020-04-17 13:44:43',
                'payment_methods_id' => 3,
                'coins_id' => 1,
            ),
        ));
        
        
    }
}