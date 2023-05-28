<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Report\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => ''], function () {

    /*
     *
     *  Frontend Reports Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'reports';
    $controller_name = 'ReportsController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    

    


    Route::get("$module_name/{id}/{slug?}", ['as' => "$module_name.show", 'uses' => "$controller_name@show"]);


});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Report\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
    /*
    * These routes need view-backend permission
    * (good if you want to allow more than one group in the backend,
    * then limit the backend features by different roles or permissions)
    *
    * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
    */

    /*
     *
     *  Backend Reports Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'reports';
    $controller_name = 'ReportsController';

    Route::get("$module_name/report1", ['as' => "$module_name.report1", 'uses' => "$controller_name@report1"]);
    Route::get("$module_name/report2", ['as' => "$module_name.report1", 'uses' => "$controller_name@report2"]);
    Route::get("$module_name/report3", ['as' => "$module_name.report1", 'uses' => "$controller_name@report3"]);
    Route::get("$module_name/report4", ['as' => "$module_name.report1", 'uses' => "$controller_name@report4"]);
    Route::get("$module_name/report5", ['as' => "$module_name.report1", 'uses' => "$controller_name@report5"]);
    Route::get("$module_name/report6", ['as' => "$module_name.report1", 'uses' => "$controller_name@report6"]);
    Route::get("$module_name/report7", ['as' => "$module_name.report1", 'uses' => "$controller_name@report7"]);
    Route::get("$module_name/report8", ['as' => "$module_name.report1", 'uses' => "$controller_name@report8"]);
    Route::get("$module_name/report9", ['as' => "$module_name.report1", 'uses' => "$controller_name@report9"]);

    // Route::get('reports/report1', function () {
    //     return view('hello');
    // })->name('reports.report1');



    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::resource("$module_name", "$controller_name");
});
