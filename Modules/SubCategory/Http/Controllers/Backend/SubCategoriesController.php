<?php

namespace Modules\SubCategory\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class SubCategoriesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'SubCategories';

        // module name
        $this->module_name = 'subcategories';

        // directory path of the module
        $this->module_path = 'subcategory::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\SubCategory\Models\SubCategory";
    }


}
