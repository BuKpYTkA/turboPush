<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 21.10.2019
 * Time: 16:34
 */

namespace App\Models\SideMenu\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

/**
 * Class SubMenuRelationScope
 * @package App\Models\SideMenu\Scopes
 */
class SubMenuRelationScope implements Scope
{

    /**
     * @param Builder $builder
     * @param Model $model
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->with('subMenu');
    }

}