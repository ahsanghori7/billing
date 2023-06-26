<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class servicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services_v2')->delete();
        
        \DB::table('services_v2')->insert(array (
            0 => 
            array (
                'id' => 1,
                'service' => 'Line Beauty',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            1 => 
            array (
                'id' => 2,
                'service' => 'Line Wedding',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            2 => 
            array (
                'id' => 3,
                'service' => 'Flash Foot',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            3 => 
            array (
                'id' => 5,
                'service' => 'Line Tips',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => 'http://backend.linetips.net/api/callback-billing',
                'callback_enable' => '1',
            ),
            4 => 
            array (
                'id' => 6,
                'service' => 'Line Videos',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            5 => 
            array (
                'id' => 7,
                'service' => 'Line Visuals',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            6 => 
            array (
                'id' => 8,
                'service' => 'Tasalla',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            7 => 
            array (
                'id' => 9,
                'service' => 'Line Magazine',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            8 => 
            array (
                'id' => 10,
                'service' => 'Line Tips',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            9 => 
            array (
                'id' => 11,
                'service' => 'Egypt Line Tips',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            10 => 
            array (
                'id' => 12,
            'service' => 'Mobily Line Tips (KSA)',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            11 => 
            array (
                'id' => 13,
                'service' => 'Ella Iraq',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            12 => 
            array (
                'id' => 14,
                'service' => 'Line Health',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            13 => 
            array (
                'id' => 15,
                'service' => 'MoneySmart',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            14 => 
            array (
                'id' => 16,
                'service' => 'LineCooking',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            15 => 
            array (
                'id' => 17,
                'service' => 'LinePositive',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            16 => 
            array (
                'id' => 18,
                'service' => 'LineDecor',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            17 => 
            array (
                'id' => 19,
                'service' => 'LineMom',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            18 => 
            array (
                'id' => 20,
                'service' => 'ZodiacTips',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            19 => 
            array (
                'id' => 21,
                'service' => 'Ramadan',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            20 => 
            array (
                'id' => 22,
                'service' => 'LineFitness',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            21 => 
            array (
                'id' => 23,
                'service' => 'LineCelebrities',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            22 => 
            array (
                'id' => 24,
                'service' => 'LineEntertainment',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            23 => 
            array (
                'id' => 25,
                'service' => 'Zodiac Birthday',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            24 => 
            array (
                'id' => 26,
                'service' => 'LineSocial',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            25 => 
            array (
                'id' => 27,
                'service' => 'Job',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            26 => 
            array (
                'id' => 28,
                'service' => 'LineTravel',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            27 => 
            array (
                'id' => 29,
                'service' => 'LineCouples',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            28 => 
            array (
                'id' => 30,
                'service' => 'LineFashion',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            29 => 
            array (
                'id' => 31,
                'service' => 'Estafed',
                'status' => 1,
                'client_id' => 6,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            30 => 
            array (
                'id' => 32,
                'service' => 'Aswakuna',
                'status' => 1,
                'client_id' => 6,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            31 => 
            array (
                'id' => 33,
                'service' => 'Shopping Deals',
                'status' => 1,
                'client_id' => 6,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            32 => 
            array (
                'id' => 34,
                'service' => 'Octothink',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => 'http://www.octothink.com/api/auth/callback/billing',
                'callback_enable' => '1',
            ),
            33 => 
            array (
                'id' => 35,
                'service' => 'Golden Steps',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => NULL,
                'callback_enable' => '0',
            ),
            34 => 
            array (
                'id' => 36,
                'service' => 'Ella KSA',
                'status' => 1,
                'client_id' => 1,
                'callback_url' => 'http://backend.linetips.net/api/callback-billing',
                'callback_enable' => '1',
            ),
        ));
        
        
    }
}