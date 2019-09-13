<?php

namespace App\Models\PageContent;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PageContent
 * @package App\Models\PageContent
 * @property int $id
 * @property string $page_alias
 * @property string $content
 * @property string $banner
 */
class PageContent extends Model
{

    protected $fillable = [
        'content',
        'banner'
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
     * @param string $pageAlias
     */
    public function setPageAlias(string $pageAlias): void
    {
        $this->page_alias = $pageAlias;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getBanner(): string
    {
        return $this->banner;
    }

    /**
     * @param string $banner
     */
    public function setBanner(string $banner): void
    {
        $this->banner = $banner;
    }

}
