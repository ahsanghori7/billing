<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MondiapayConfigsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('mondiapay_configs')->delete();
        
        DB::table('mondiapay_configs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'operator_id' => 53,
                'country_id' => 82,
                'client_id' => 'e81370a0-8bbe-4f88-9d81-bfbf9b0d146d',
                'client_secret' => 'af784e06-8627-46a6-b782-9c2c5875ca06',
                'created_at' => '2022-09-28 12:34:17',
                'updated_at' => '2022-09-28 12:34:21',
            ),
            1 => 
            array (
                'id' => 2,
                'operator_id' => 54,
                'country_id' => 82,
                'client_id' => 'de91b330-518a-4fcf-9354-954a086d69ed',
                'client_secret' => '9347196d-f215-4c4a-9299-6e7160705aba',
                'created_at' => '2022-09-28 12:34:24',
                'updated_at' => '2022-09-28 12:34:25',
            ),
            2 => 
            array (
                'id' => 3,
                'operator_id' => 55,
                'country_id' => 82,
                'client_id' => '236c15f8-9f98-49bf-97f7-7a467e25a6f2',
                'client_secret' => '170ad7e1-f3b3-4812-a341-f5970a75621b',
                'created_at' => '2022-09-28 12:34:27',
                'updated_at' => '2022-09-28 12:34:29',
            ),
            3 => 
            array (
                'id' => 4,
                'operator_id' => 86,
                'country_id' => 82,
                'client_id' => '73b29eb4-40d6-4d5a-9d7f-42654309216f',
                'client_secret' => 'ba8a519c-1bb7-4806-9bf7-a0e70d6481e8',
                'created_at' => '2022-09-28 12:34:32',
                'updated_at' => '2022-09-28 12:34:33',
            ),
        ));
        
        
    }
}