<?php

namespace App\Models\BannerImage;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BannerImage
 * @package App\Models\BannerImage
 * @property $id
 * @property $page_alias
 * @property $image_url
 * @property $small_text
 */
class BannerImage extends Model
{

    protected $fillable = [
        'page_alias',
        'small_text',
        'image_url'
    ];

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
    public function getImageUrl()
    {
        if ($this->image_url) {
            return asset('uploads') . '/' . $this->image_url;
        }
        return '';
    }

    /**
     * @param mixed $image_url
     */
    public function setImageUrl($image_url): void
    {
        $this->image_url = $image_url;
    }

    /**
     * @return mixed
     */
    public function getSmallText()
    {
        return $this->small_text ?? '';
    }

    /**
     * @param mixed $small_text
     */
    public function setSmallText($small_text): void
    {
        $this->small_text = $small_text;
    }

}
