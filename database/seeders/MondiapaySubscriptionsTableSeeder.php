<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class MondiapaySubscriptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('mondiapay_subscriptions')->delete();
        
        DB::table('mondiapay_subscriptions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'mp_config_id' => 3,
                'subservice_id' => 260,
                'daily_service_id' => 77580001,
                'weekly_service_id' => 0,
                'monthly_service_id' => 0,
                'daily_unsub_keyword' => 'STOP OCTOTD',
                'weekly_unsub_keyword' => '',
                'monthly_unsub_keyword' => '',
                'short_code' => 7785,
                'created_at' => '2022-09-28 12:54:02',
                'updated_at' => '2022-09-28 12:54:04',
            ),
            1 => 
            array (
                'id' => 2,
                'mp_config_id' => 2,
                'subservice_id' => 261,
                'daily_service_id' => 77560002,
                'weekly_service_id' => 0,
                'monthly_service_id' => 0,
                'daily_unsub_keyword' => 'STOP OCTOTD',
                'weekly_unsub_keyword' => '',
                'monthly_unsub_keyword' => '',
                'short_code' => 7786,
                'created_at' => '2022-09-28 12:55:24',
                'updated_at' => '2022-09-28 12:55:35',
            ),
            2 => 
            array (
                'id' => 3,
                'mp_config_id' => 1,
                'subservice_id' => 262,
                'daily_service_id' => 77540001,
                'weekly_service_id' => 0,
                'monthly_service_id' => 0,
                'daily_unsub_keyword' => '	
STOP OCTOTD',
                'weekly_unsub_keyword' => '',
                'monthly_unsub_keyword' => '',
                'short_code' => 7810,
                'created_at' => '2022-09-28 12:56:23',
                'updated_at' => '2022-09-28 12:56:25',
            ),
            3 => 
            array (
                'id' => 4,
                'mp_config_id' => 4,
                'subservice_id' => 263,
                'daily_service_id' => 77520001,
                'weekly_service_id' => 0,
                'monthly_service_id' => 0,
                'daily_unsub_keyword' => 'STOP OCTOTD',
                'weekly_unsub_keyword' => '',
                'monthly_unsub_keyword' => '',
                'short_code' => 4036,
                'created_at' => '2022-09-28 12:57:05',
                'updated_at' => '2022-09-28 12:57:08',
            ),
            4 => 
            array (
                'id' => 5,
                'mp_config_id' => 3,
                'subservice_id' => 264,
                'daily_service_id' => 77580002,
                'weekly_service_id' => 0,
                'monthly_service_id' => 0,
                'daily_unsub_keyword' => 'STOP LINETD',
                'weekly_unsub_keyword' => '',
                'monthly_unsub_keyword' => '',
                'short_code' => 7785,
                'created_at' => '2022-09-28 12:58:08',
                'updated_at' => '2022-09-28 12:58:10',
            ),
            5 => 
            array (
                'id' => 6,
                'mp_config_id' => 2,
                'subservice_id' => 265,
                'daily_service_id' => 77560001,
                'weekly_service_id' => 0,
                'monthly_service_id' => 0,
                'daily_unsub_keyword' => 'STOP LINETD',
                'weekly_unsub_keyword' => '',
                'monthly_unsub_keyword' => '',
                'short_code' => 7786,
                'created_at' => '2022-09-28 12:58:41',
                'updated_at' => '2022-09-28 12:58:44',
            ),
            6 => 
            array (
                'id' => 7,
                'mp_config_id' => 1,
                'subservice_id' => 266,
                'daily_service_id' => 77540002,
                'weekly_service_id' => 0,
                'monthly_service_id' => 0,
                'daily_unsub_keyword' => 'STOP LINETD',
                'weekly_unsub_keyword' => '',
                'monthly_unsub_keyword' => '',
                'short_code' => 7810,
                'created_at' => '2022-09-28 12:59:45',
                'updated_at' => '2022-09-28 12:59:48',
            ),
            7 => 
            array (
                'id' => 8,
                'mp_config_id' => 4,
                'subservice_id' => 267,
                'daily_service_id' => 77520002,
                'weekly_service_id' => 0,
                'monthly_service_id' => 0,
                'daily_unsub_keyword' => 'STOP LINETD',
                'weekly_unsub_keyword' => '',
                'monthly_unsub_keyword' => '',
                'short_code' => 4036,
                'created_at' => '2022-09-28 13:00:21',
                'updated_at' => '2022-09-28 13:00:23',
            ),
        ));
        
        
    }
}