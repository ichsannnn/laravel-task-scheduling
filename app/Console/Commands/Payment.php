<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\PaymentController;

class Payment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payment:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert new payment data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        PaymentController::store();
        $this->info('Payment created successfully!');
    }
}
