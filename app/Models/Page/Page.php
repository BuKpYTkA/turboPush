<?php

namespace App\Models\Page;

use App\Models\PageContent\PageContent;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Page
 * @package App\Models\Page
 * @property int $id
 * @property string $alias
 */
class Page extends Model
{
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
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(string $alias): void
    {
        $this->alias = $alias;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function content()
    {
        return $this->hasMany(PageContent::class);
    }
}
