<?php

namespace Modules\RoutePath\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\RoutePath;

class RoutePathDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * RoutePaths Seed
         * ------------------
         */

        // DB::table('routepaths')->truncate();
        // echo "Truncate: routepaths \n";

        RoutePath::factory()->count(20)->create();
        $rows = RoutePath::all();
        echo " Insert: routepaths \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
