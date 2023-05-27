<?php

namespace Modules\UOM\Console\Commands;

use Illuminate\Console\Command;

class UOMCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:UOMCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'UOM Command description';

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
