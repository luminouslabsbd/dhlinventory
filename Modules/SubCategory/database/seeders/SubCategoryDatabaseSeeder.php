<?php

namespace Modules\SubCategory\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\SubCategory;

class SubCategoryDatabaseSeeder extends Seeder
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
         * SubCategories Seed
         * ------------------
         */

        // DB::table('subcategories')->truncate();
        // echo "Truncate: subcategories \n";

        SubCategory::factory()->count(20)->create();
        $rows = SubCategory::all();
        echo " Insert: subcategories \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
