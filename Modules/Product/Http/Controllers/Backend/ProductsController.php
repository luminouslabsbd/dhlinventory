<?php

namespace Modules\Product\Http\Controllers\Backend;

use App\Authorizable;
use Illuminate\Support\Str;
use Modules\Product\Models\Product;
use App\Http\Controllers\Backend\BackendBaseController;

class ProductsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Products';

        // module name
        $this->module_name = 'products';

        // directory path of the module
        $this->module_path = 'product::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Product\Models\Product";
    }
    public function accept($id){
        Product::where('id',$id)->update([
            'accept'=> 1 ,
        ]);
        flash("<i class='fas fa-check'></i> New '".Str::singular($this->module_title)."' Accept")->success()->important();
        return redirect()->back();
    }

}
