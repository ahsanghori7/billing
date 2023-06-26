<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CountriesTableSeeder;
use Database\Seeders\SubservicesTableSeeder;
use Database\Seeders\MondiapaySubscriptionsTableSeeder;
use Database\Seeders\IntegrationTableSeeder;
use Database\Seeders\OperatorsTableSeeder;
use Database\Seeders\ServicesTableSeeder;
use Database\Seeders\WelcomemessagesTableSeeder;
use Database\Seeders\MarketingAffiliateParamsTableSeeder;
use Database\Seeders\ExitMessagesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(MondiapayConfigsTableSeeder::class);
        $this->call(MondiapaySubscriptionsTableSeeder::class);
        $this->call(IntegrationTableSeeder::class);
        $this->call(OperatorsTableSeeder::class);
        $this->call(SubservicesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(WelcomemessagesTableSeeder::class);
        $this->call(MarketingAffiliateParamsTableSeeder::class);
        $this->call(ExitMessagesTableSeeder::class);
        $this->call(ExitmessagesTableSeeder::class);
    }
}
