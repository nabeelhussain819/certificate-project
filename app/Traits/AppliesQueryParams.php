<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/23/2021
 * Time: 3:40 AM
 */

namespace App\Traits;


use App\Helpers\ArrayHelper;
use App\Helpers\StringHelper;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

trait AppliesQueryParams
{
    public function applyFilters(Request &$request): callable
    {
        return function (Builder $query) use (&$request) {
            $query->when($request->get('student_name'), function (Builder $builder, $student_name) {
                if ($student_name) {
                    $builder->where('first_name', 'like', $student_name)
                        ->orWhere('last_name', 'like', $student_name);
                }
            });
        };
    }
}
