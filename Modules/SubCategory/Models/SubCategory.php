<?php

namespace Modules\SubCategory\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'subcategories';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\SubCategory\database\factories\SubCategoryFactory::new();
    }
}
