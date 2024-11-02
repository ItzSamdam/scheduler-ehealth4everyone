<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repository\ApiLogRepositoryInterface;

class ClearOldLogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logs:clear-old';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear logs older than 30 days';

    /**
     * Execute the console command.
     */
    public function handle(ApiLogRepositoryInterface $repository)
    {
        $repository->deleteOldLogs();
        
        $this->info('Old logs cleared.');
    }
}
