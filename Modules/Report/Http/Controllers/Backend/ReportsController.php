<?php

namespace Modules\Report\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ReportsController extends BackendBaseController
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
        $this->module_title = 'Reports';

        // module name
        $this->module_name = 'reports';

        // directory path of the module
        $this->module_path = 'report::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Report\Models\Report";
    }


    public function report1()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model; 

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate();

        // dd( $module_path );
        // dd('Hello');
        return view( 
            "report::backend.reports.allreports/report1",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action')
        );
    }



    public function report2()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model; 

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate();

        // dd( $module_path );
        // dd('Hello');
        return view( 
            "report::backend.reports.allreports/report2",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action')
        );
    }


    public function report3()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model; 

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate();

        // dd( $module_path );
        // dd('Hello');
        return view( 
            "report::backend.reports.allreports/report3",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action')
        );
    }

    public function report4()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model; 

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate();

        // dd( $module_path );
        // dd('Hello');
        return view( 
            "report::backend.reports.allreports/report4",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action')
        );
    }


    public function report5()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model; 

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate();

        // dd( $module_path );
        // dd('Hello');
        return view( 
            "report::backend.reports.allreports/report5",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action')
        );
    }

    public function report6()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model; 

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate();

        // dd( $module_path );
        // dd('Hello');
        return view( 
            "report::backend.reports.allreports/report6",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action')
        );
    }


    public function report7()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model; 

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate();

        // dd( $module_path );
        // dd('Hello');
        return view( 
            "report::backend.reports.allreports/report7",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action')
        );
    }

    public function report8()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model; 

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate();

        // dd( $module_path );
        // dd('Hello');
        return view( 
            "report::backend.reports.allreports/report8",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action')
        );
    }


    public function report9()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model; 

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate();

        // dd( $module_path );
        // dd('Hello');
        return view( 
            "report::backend.reports.allreports/report9",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action')
        );
    }

     

}
