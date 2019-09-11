<?php

namespace App\Models\MetaTag;

use Encore\Admin\Auth\Database\Administrator;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MetaTag
 * @package App\Models\MetaTag
 * @property $id
 * @property $page_alias
 * @property $title
 * @property $description
 * @property $keywords
 * @property $og_title
 * @property $og_description
 * @property $updated_by
 * @property $h_1
 */
class MetaTag extends Model
{

    protected $fillable = [
        'page_alias',
        'title',
        'description',
        'keywords',
        'og_title',
        'og_description',
        'h_1',
        'update_by'
    ];

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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param mixed $keywords
     */
    public function setKeywords($keywords): void
    {
        $this->keywords = $keywords;
    }

    /**
     * @return mixed
     */
    public function getOgTitle()
    {
        return $this->og_title;
    }

    /**
     * @param mixed $og_title
     */
    public function setOgTitle($og_title): void
    {
        $this->og_title = $og_title;
    }

    /**
     * @return mixed
     */
    public function getOgDescription()
    {
        return $this->og_description;
    }

    /**
     * @param mixed $og_description
     */
    public function setOgDescription($og_description): void
    {
        $this->og_description = $og_description;
    }

    /**
     * @return mixed
     */
    public function getUpdatedBy()
    {
        return $this->updated_by;
    }

    /**
     * @param mixed $updated_by
     */
    public function setUpdatedBy($updated_by): void
    {
        $this->updated_by = $updated_by;
    }

    /**
     * @return mixed
     */
    public function getH1()
    {
        return $this->h_1;
    }

    /**
     * @param mixed $h1
     */
    public function setH1($h1): void
    {
        $this->h_1 = $h1;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function admin()
    {
        return $this->belongsTo(Administrator::class, 'updated_by');
    }
}
