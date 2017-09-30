<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'App\Console\Commands\Data',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('data:insert')->everyFiveMinutes()->timezone('Asia/Jakarta'); // Menjalankan command php artisan data:insert setiap 5 menit
        $schedule->command('payment:insert')->everyFiveMinutes()->timezone('Asia/Jakarta'); // Menjalankan command php artisan payment:insert setiap 5 menit
        // $schedule->command('data:insert')->everyMinute()->timezone('Asia/Jakarta'); // Menjalankan command php artisan data:insert setiap 1 menit
        // $schedule->command('payment:insert')->everyMinute()->timezone('Asia/Jakarta'); // Menjalankan command php artisan payment:insert setiap 1 menit
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
