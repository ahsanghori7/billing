<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarketingAffiliateParamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marketing_affiliate_params')->delete();
        
        \DB::table('marketing_affiliate_params')->insert(array (
            0 => 
            array (
                'id' => 1,
                'affiliate_id' => 1,
                'key' => 'jp',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'affiliate_id' => 2,
                'key' => 'click_id',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'affiliate_id' => 2,
                'key' => 'security_token',
                'value' => '95fa5805-5fe6-4cad-b610-9c57f46f83e4',
                'country_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'affiliate_id' => 3,
                'key' => 'pixel',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'affiliate_id' => 3,
                'key' => 'payout',
                'value' => '3',
                'country_id' => 271,
            ),
            5 => 
            array (
                'id' => 6,
                'affiliate_id' => 3,
                'key' => 'payout',
                'value' => '0.4',
                'country_id' => 126,
            ),
            6 => 
            array (
                'id' => 7,
                'affiliate_id' => 1,
                'key' => 'source',
                'value' => 'mobipium',
                'country_id' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'affiliate_id' => 4,
                'key' => 'txid',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'affiliate_id' => 4,
                'key' => 'pubid',
                'value' => '[pubid]',
                'country_id' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'affiliate_id' => 4,
                'key' => 'amt',
                'value' => '0.4',
                'country_id' => 126,
            ),
            10 => 
            array (
                'id' => 11,
                'affiliate_id' => 4,
                'key' => 'currency',
                'value' => 'USD',
                'country_id' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'affiliate_id' => 4,
                'key' => 'amt',
                'value' => '0.5',
                'country_id' => 200,
            ),
            12 => 
            array (
                'id' => 15,
                'affiliate_id' => 4,
                'key' => 'amt',
                'value' => '3',
                'country_id' => 271,
            ),
            13 => 
            array (
                'id' => 16,
                'affiliate_id' => 3,
                'key' => 'payout',
                'value' => '0.12',
                'country_id' => 82,
            ),
            14 => 
            array (
                'id' => 17,
                'affiliate_id' => 5,
                'key' => 'click_id',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'affiliate_id' => 5,
                'key' => 'payout',
                'value' => '3.25',
                'country_id' => 271,
            ),
            16 => 
            array (
                'id' => 19,
                'affiliate_id' => 5,
                'key' => 'payout',
                'value' => '0.40',
                'country_id' => 126,
            ),
            17 => 
            array (
                'id' => 20,
                'affiliate_id' => 6,
                'key' => 'ccuid',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            18 => 
            array (
                'id' => 21,
                'affiliate_id' => 6,
                'key' => 'p',
                'value' => '0.40',
                'country_id' => 126,
            ),
            19 => 
            array (
                'id' => 22,
                'affiliate_id' => 7,
                'key' => 'e',
                'value' => '1005221',
                'country_id' => NULL,
            ),
            20 => 
            array (
                'id' => 23,
                'affiliate_id' => 7,
                'key' => 'a',
                'value' => '10585',
                'country_id' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'affiliate_id' => 7,
                'key' => 'f',
                'value' => 'pb',
                'country_id' => NULL,
            ),
            22 => 
            array (
                'id' => 25,
                'affiliate_id' => 7,
                'key' => 'r',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'affiliate_id' => 7,
                'key' => 'key',
                'value' => 'a8323fb46222514b7510a66623d1aaefb35ac5d8640f074676abe',
                'country_id' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'affiliate_id' => 8,
                'key' => 'click_id',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            25 => 
            array (
                'id' => 28,
                'affiliate_id' => 8,
                'key' => 'tracker',
                'value' => 'AbsolutelyDMCCC',
                'country_id' => NULL,
            ),
            26 => 
            array (
                'id' => 29,
                'affiliate_id' => 4,
                'key' => 'amt',
                'value' => '0.12',
                'country_id' => 82,
            ),
            27 => 
            array (
                'id' => 30,
                'affiliate_id' => 9,
                'key' => 'tid',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            28 => 
            array (
                'id' => 32,
                'affiliate_id' => 10,
                'key' => 'currency',
                'value' => 'USD',
                'country_id' => NULL,
            ),
            29 => 
            array (
                'id' => 33,
                'affiliate_id' => 10,
                'key' => 'handler',
                'value' => '11160',
                'country_id' => NULL,
            ),
            30 => 
            array (
                'id' => 34,
                'affiliate_id' => 10,
                'key' => 'hash',
                'value' => '66d2ae4adddcc689f294681514a2a406',
                'country_id' => NULL,
            ),
            31 => 
            array (
                'id' => 35,
                'affiliate_id' => 10,
                'key' => 'tracker',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            32 => 
            array (
                'id' => 36,
                'affiliate_id' => 11,
                'key' => 'clickid',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            33 => 
            array (
                'id' => 37,
                'affiliate_id' => 11,
                'key' => 'secure',
                'value' => '17ef13170287c6f95504fd0c67178655',
                'country_id' => NULL,
            ),
            34 => 
            array (
                'id' => 38,
                'affiliate_id' => 11,
                'key' => 'sum',
                'value' => '0.40',
                'country_id' => 126,
            ),
            35 => 
            array (
                'id' => 39,
                'affiliate_id' => 11,
                'key' => 'sum',
                'value' => '0.70',
                'country_id' => 200,
            ),
            36 => 
            array (
                'id' => 40,
                'affiliate_id' => 12,
                'key' => 'id_click',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            37 => 
            array (
                'id' => 41,
                'affiliate_id' => 12,
                'key' => 'price',
                'value' => '0.40',
                'country_id' => 126,
            ),
            38 => 
            array (
                'id' => 42,
                'affiliate_id' => 12,
                'key' => 'price',
                'value' => '0.50',
                'country_id' => 200,
            ),
            39 => 
            array (
                'id' => 43,
                'affiliate_id' => 12,
                'key' => 'price',
                'value' => '0.10',
                'country_id' => 82,
            ),
            40 => 
            array (
                'id' => 44,
                'affiliate_id' => 13,
                'key' => 'token',
                'value' => '7a1e55c492a215e60ca80e5d372127bc',
                'country_id' => NULL,
            ),
            41 => 
            array (
                'id' => 45,
                'affiliate_id' => 13,
                'key' => 'click_id',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            42 => 
            array (
                'id' => 46,
                'affiliate_id' => 14,
                'key' => 'click_id',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
            43 => 
            array (
                'id' => 47,
                'affiliate_id' => 13,
                'key' => 'event',
                'value' => 'redeem',
                'country_id' => NULL,
            ),
            44 => 
            array (
                'id' => 48,
                'affiliate_id' => 15,
                'key' => 'tid',
                'value' => '[clickid]',
                'country_id' => NULL,
            ),
        ));
        
        
    }
}