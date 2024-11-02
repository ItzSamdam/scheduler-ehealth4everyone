<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InvalidateCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:invalidate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Invalidate the cached API data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Cache::forget('external_api_data');
        $this->info('Cache invalidated.');
    }
}
