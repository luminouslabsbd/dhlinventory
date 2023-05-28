<?php

namespace Modules\RoutePath\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoutePath extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'routepaths';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\RoutePath\database\factories\RoutePathFactory::new();
    }
}
