<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\SampleData;

class Data extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating new random data';

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
    public function handle(\Faker\Generator $faker)
    {
        $data = new SampleData;
        $data->name = $faker->name;
        $data->username = $faker->userName;
        $data->email = $faker->email;
        $data->password = $faker->md5;
        $data->description = $faker->realText(100);
        $data->save();
        $this->info('Data created successfully!');
    }
}
