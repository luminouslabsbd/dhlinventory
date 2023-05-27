<?php

namespace Modules\SubCategory\Console\Commands;

use Illuminate\Console\Command;

class SubCategoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SubCategoryCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'SubCategory Command description';

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
