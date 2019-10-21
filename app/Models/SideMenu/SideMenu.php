<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 21.10.2019
 * Time: 13:03
 */

namespace App\Models\SideMenu;


use App\Models\SideMenu\Scopes\SubMenuRelationScope;
use Encore\Admin\Auth\Database\Menu;

/**
 * Class SideMenu
 * @package App\Models\SideMenu
 * @property int $id
 * @property string $title
 * @property int $parent_id
 * @property int $order
 * @property string $icon
 * @property string $uri
 */
class SideMenu extends Menu
{


    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new SubMenuRelationScope());
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parent_id;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subMenu()
    {
        return $this->hasMany(SideMenu::class, 'parent_id');
    }
}