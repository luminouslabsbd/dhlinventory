<?php

namespace Modules\UOM\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\UOM;

class UOMDatabaseSeeder extends Seeder
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
         * UOMS Seed
         * ------------------
         */

        // DB::table('uoms')->truncate();
        // echo "Truncate: uoms \n";

        UOM::factory()->count(20)->create();
        $rows = UOM::all();
        echo " Insert: uoms \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
