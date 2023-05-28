<?php

namespace Modules\RequestProduct\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestProduct extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'requestproducts';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\RequestProduct\database\factories\RequestProductFactory::new();
    }
}
