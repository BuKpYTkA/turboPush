<?php

namespace App\Models\MetaTag;

use Encore\Admin\Auth\Database\Administrator;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MetaTag
 * @package App\Models\MetaTag
 * @property int $id
 * @property string $page_alias
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $og_title
 * @property string $og_description
 * @property int $updated_by
 * @property string $h_1
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPageAlias(): string
    {
        return $this->page_alias;
    }

    /**
     * @param string $page_alias
     */
    public function setPageAlias(string $page_alias): void
    {
        $this->page_alias = $page_alias;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title ?? '';
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description ?? '';
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getKeywords(): string
    {
        return $this->keywords ?? '';
    }

    /**
     * @param string $keywords
     */
    public function setKeywords(string $keywords): void
    {
        $this->keywords = $keywords;
    }

    /**
     * @return string
     */
    public function getOgTitle(): string
    {
        return $this->og_title ?? '';
    }

    /**
     * @param string $ogTitle
     */
    public function setOgTitle(string $ogTitle): void
    {
        $this->og_title = $ogTitle;
    }

    /**
     * @return string
     */
    public function getOgDescription(): string
    {
        return $this->og_description ?? '';
    }

    /**
     * @param string $ogDescription
     */
    public function setOgDescription(string $ogDescription): void
    {
        $this->og_description = $ogDescription;
    }

    /**
     * @return int
     */
    public function getUpdatedBy(): int
    {
        return $this->updated_by;
    }

    /**
     * @param int $updatedBy
     */
    public function setUpdatedBy(int $updatedBy): void
    {
        $this->updated_by = $updatedBy;
    }

    /**
     * @return string
     */
    public function getH1(): string
    {
        return $this->h_1;
    }

    /**
     * @param string $h1
     */
    public function setH1(string $h1): void
    {
        $this->h_1 = $h1;
    }

    /**
     * @return mixed
     */
    public function admin()
    {
        return $this->belongsTo(Administrator::class, 'updated_by');
    }
}
