<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Site Title',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Site Description',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            3 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Bienvenido al panel de administrador de Bio en linea',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            4 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => 'settings/January2020/n0LMJnQJyx2yHM6rcGHP.png',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'Inspirados en Servir',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => 'settings/January2020/25HXxpdG4cUgVMs1Q32b.png',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            7 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings/February2020/acJWTLebM1CIjFdCxUBe.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 13,
                'key' => 'admin.detalle_login',
                'display_name' => 'detalle_login',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 7,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
            10 => 
            array (
                'id' => 12,
                'key' => 'admin.google_analytics_client_id',
                'display_name' => 'Google',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 6,
                'group' => 'Admin',
            ),
            11 => 
            array (
                'id' => 14,
                'key' => 'admin.mapa_posiciones_publicidad',
                'display_name' => 'mapa_posiciones',
                'value' => 'settings/February2020/WD9jBoasiDCH6reeUn11.jpg',
                'details' => NULL,
                'type' => 'image',
                'order' => 8,
                'group' => 'Admin',
            ),
        ));
        
        
    }
}