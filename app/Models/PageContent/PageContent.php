<?php

namespace App\Models\PageContent;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PageContent
 * @package App\Models\PageContent
 * @property $id
 * @property $page_alias
 * @property $content
 */
class PageContent extends Model
{

    protected $fillable = [
        'content'
    ];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPageAlias()
    {
        return $this->page_alias;
    }

    /**
     * @param mixed $page_alias
     */
    public function setPageAlias($page_alias): void
    {
        $this->page_alias = $page_alias;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

}
