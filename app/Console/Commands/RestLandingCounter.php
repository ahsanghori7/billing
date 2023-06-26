<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repository\Interfaces\LandingInterface;

class RestLandingCounter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:rest-landing-counter {landing_id?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'reset landing counter limit to null';

    /**
     * Execute the console command.
     */
    public function handle(LandingInterface $landing): void
    {
        try {
            $landingId = $this->argument('landing_id');
            if ($landingId) {
                $conditions = ['status' => 1, 'landing_id' => $landingId];
            } else {
                $conditions = ['status' => 1];
            }
            $landing->update($conditions, ['counter' => 0]);
            $this->info('The command was successful!');
        } catch (\Throwable $th) {
            $this->error('Something went wrong!');
        }
    }
}
