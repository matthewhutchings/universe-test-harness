<?php

namespace App\Console\Commands;

use App\Models\ExampleData;
use Illuminate\Console\Command;

class makefakedata extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:makefakedata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $times = rand(10, 1000);

        $times = 1;
        $sourceArray = array('Google', 'Facebook', 'TikTok', 'Lead Source 1', 'Email');
        $statusArray = array('Accepted', 'In Progress', 'New', 'Declined', 'Dead');
        $valueArray = array(0, 500, 250, 1000, 750);

        for ($x = 0; $x <= $times; $x++) {
            $sourceKey = array_rand($sourceArray, 1);
            $statusKey = array_rand($statusArray, 1);
            $valueKey = array_rand($statusArray, 1);
            ExampleData::create([
                'name' => 'Customer ' . $x,
                'source' => $sourceArray[$sourceKey],
                'status' =>  $sourceArray[$statusKey],
                'value' =>  $valueArray[$valueKey],
            ]);
        }
    }
}
