<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        Commands\RestLandingCounter::class,
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('app:rest-landing-counter')
                 ->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        // phpcs:disable PSR12.Operators.OperatorSpacing.NoSpaceAfter, PSR12.Operators.OperatorSpacing.NoSpaceBefore
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
