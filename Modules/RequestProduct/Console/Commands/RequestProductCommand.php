<?php

namespace Modules\RequestProduct\Console\Commands;

use Illuminate\Console\Command;

class RequestProductCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:RequestProductCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'RequestProduct Command description';

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
