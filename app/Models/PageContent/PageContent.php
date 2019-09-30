<?php

namespace App\Models\PageContent;

use App\Models\Page\Page;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PageContent
 * @package App\Models\PageContent
 * @property int $id
 * @property int $page_id
 * @property string $section
 * @property string $text
 */
class PageContent extends Model
{

    protected $fillable = [
        'page_id',
        'section',
        'text'
    ];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPageId(): int
    {
        return $this->page_id;
    }

    /**
     * @param int $page_id
     */
    public function setPageId(int $page_id): void
    {
        $this->page_id = $page_id;
    }

    /**
     * @return string
     */
    public function getSection(): string
    {
        return $this->section;
    }

    /**
     * @param string $section
     */
    public function setSection(string $section): void
    {
        $this->section = $section;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

}
