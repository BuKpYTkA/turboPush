<?php

namespace App\Models\NavBarElement;

use App\Events\NavBarElement\NavBarElementUpdated;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NavBarElement
 * @package App\Models\NavBarElement
 * @property int $id
 * @property string $title
 * @property int $parent_id
 * @property string $icon
 * @property string $link
 * @property int $order
 */
class NavBarElement extends Model
{

    use ModelTree, AdminBuilder;

    /**
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => NavBarElementUpdated::class,
        'updated' => NavBarElementUpdated::class,
        'saved' => NavBarElementUpdated::class
    ];

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
    public function getText(): string
    {
        return $this->title;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->title = $text;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parent_id;
    }

    /**
     * @param int $parentId
     */
    public function setParentId(int $parentId): void
    {
        $this->parent_id = $parentId;
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon ?? '';
    }

    /**
     * @param string $icon
     */
    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @param int $order
     */
    public function setOrder(int $order): void
    {
        $this->order = $order;
    }

    /**
     * @return bool
     */
    public function hasParent()
    {
        return (bool)$this->parent_id;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getChild()
    {
        return $this->hasMany(NavBarElement::class, 'parent_id');
    }

    /**
     * @return bool
     */
    public function hasChildren()
    {
        return (bool)$this->hasMany(NavBarElement::class, 'parent_id')->first();
    }
}
