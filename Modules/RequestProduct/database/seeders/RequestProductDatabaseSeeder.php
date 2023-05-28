<?php

namespace Modules\RequestProduct\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\RequestProduct;

class RequestProductDatabaseSeeder extends Seeder
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
         * RequestProducts Seed
         * ------------------
         */

        // DB::table('requestproducts')->truncate();
        // echo "Truncate: requestproducts \n";

        RequestProduct::factory()->count(20)->create();
        $rows = RequestProduct::all();
        echo " Insert: requestproducts \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
