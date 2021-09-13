<?php

namespace App\Console;
use App\Models\link;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            DB::table('links')->whereRaw('created_at >= now() - interval 2 hour');
        })->daily();
    }
 
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
      //  $signature = 'delete-records';

    // function handle()
    //{
      //  DB::table('links')->where('created_at', '<=', Carbon::now()->subDay())->delete();
    //}
        
        //$this->load(__DIR__.'/Commands');

       // require base_path('routes/console.php');
    }
}
