<?php

namespace App\Models\MetaTagPageContent;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MetaTagPageContent
 * @package App\Models\MetaTagPageContent
 * @property $id
 * @property $meta_tag_page_id
 * @property $title
 * @property $description
 * @property $keywords
 * @property $og_title
 * @property $og_description
 * @property $updated_by
 * @property $h1
 */
class MetaTagPageContent extends Model
{
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
    public function getMetaTagPageId()
    {
        return $this->meta_tag_page_id;
    }

    /**
     * @param mixed $meta_tag_page_id
     */
    public function setMetaTagPageId($meta_tag_page_id): void
    {
        $this->meta_tag_page_id = $meta_tag_page_id;
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
        return $this->h1;
    }

    /**
     * @param mixed $h1
     */
    public function setH1($h1): void
    {
        $this->h1 = $h1;
    }

}
