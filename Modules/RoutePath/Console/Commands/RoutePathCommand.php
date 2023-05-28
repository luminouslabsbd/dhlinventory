<?php

namespace Modules\RoutePath\Console\Commands;

use Illuminate\Console\Command;

class RoutePathCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:RoutePathCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'RoutePath Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
