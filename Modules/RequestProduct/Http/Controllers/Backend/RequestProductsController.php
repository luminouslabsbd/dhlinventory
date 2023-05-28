<?php

namespace Modules\RequestProduct\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Authorizable;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;


class RequestProductsController extends Controller
{
    use Authorizable;
    public $module_title;
    public $module_name;
    public $module_path;
    public $module_icon;
    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'RequestProducts';

        // module name
        $this->module_name = 'requestproducts';

        // directory path of the module
        $this->module_path = 'requestproduct::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\RequestProduct\Models\RequestProduct";
    }

    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $page_heading = label_case($module_title);
        $title = $page_heading.' '.label_case($module_action);

        $$module_name = $module_model::select('id', 'qty', 'updated_at');

        $data = $$module_name;

        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                
                    $module_name = $this->module_name;
                    return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('qty', '<strong>{{$qty}}</strong>')
            
            ->editColumn('updated_at', function ($data) {
                $module_name = $this->module_name;

                $diff = Carbon::now()->diffInHours($data->updated_at);

                if ($diff < 25) {
                    return $data->updated_at->diffForHumans();
                } else {
                    return $data->updated_at->isoFormat('llll');
                }
            })
            ->rawColumns(['qty', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }

}
