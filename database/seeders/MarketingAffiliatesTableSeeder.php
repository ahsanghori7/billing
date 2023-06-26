<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarketingAffiliatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marketing_affiliates')->delete();
        
        \DB::table('marketing_affiliates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Mobipium',
                'source' => 'mobipium',
                'postback_url' => 'http://mobipiumlink.com/conversion/index.php',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => 'source',
                'clickid_parameter' => 'jp',
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mobidea',
                'source' => 'mobidea',
                'postback_url' => 'https://postback.mobidea.ai/postback',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => 'source',
                'clickid_parameter' => 'click_id',
                'token_parameter' => 'security_token',
                'token_value' => '95fa5805-5fe6-4cad-b610-9c57f46f83e4',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'GameOfAds',
                'source' => 'gameofads',
                'postback_url' => 'https://gameofads.com/pixel.php',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mobplus',
                'source' => 'mobplus',
                'postback_url' => 'http://m.mobplus.net/c/p/38a6c944a2df413fb9be186412712868',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Angel Media',
                'source' => 'angelmedia',
                'postback_url' => 'http://postback.rustclick.com/pb/336',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Collect Cent',
                'source' => 'collectcent',
                'postback_url' => 'http://162.243.217.139/dlv/track.php',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ClickDealer',
                'source' => 'clickdealer',
                'postback_url' => 'https://gdmsecure.com/p.ashx',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Smadex',
                'source' => 'smadex',
                'postback_url' => 'https://geo-tracker.smadex.com/hyperad/tracking/action/subscription',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'SmartConnect ',
                'source' => 'smartconnect',
                'postback_url' => 'http://smartconnect.fusetracking.com/pb',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Traffic Company',
                'source' => 'trafficcompany ',
                'postback_url' => 'https://postback.level23.nl',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Affshark',
                'source' => 'affshark',
                'postback_url' => 'https://offers-affshark.affise.com/postback',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Dragon',
                'source' => 'adragons',
                'postback_url' => 'https://pb.affclick.mobi/handle/b61b97c36aded6093d90fdb425e67de1/event',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Golden Goose',
                'source' => 'goldengoose',
                'postback_url' => 'http://n.gg.agency/ntf1',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Mobtek Media',
                'source' => 'MM',
                'postback_url' => 'http://mobtekmedia.hopb0.com/notify/110094',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Mobikok',
                'source' => 'mobikok',
                'postback_url' => 'http://trace.sm4link.com/pb',
                'enabled' => 1,
                'method' => 'GET',
                'source_parameter' => NULL,
                'clickid_parameter' => NULL,
                'token_parameter' => NULL,
                'token_value' => NULL,
            ),
        ));
        
        
    }
}