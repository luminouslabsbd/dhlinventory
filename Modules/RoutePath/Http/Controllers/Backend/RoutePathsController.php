<?php

namespace Modules\RoutePath\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class RoutePathsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'RoutePaths';

        // module name
        $this->module_name = 'routepaths';

        // directory path of the module
        $this->module_path = 'routepath::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\RoutePath\Models\RoutePath";
    }

}
