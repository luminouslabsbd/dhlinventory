<?php

namespace Modules\UOM\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class UOMSController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'UOMS';

        // module name
        $this->module_name = 'uoms';

        // directory path of the module
        $this->module_path = 'uom::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\UOM\Models\UOM";
    }

}
