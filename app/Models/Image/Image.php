<?php

namespace App\Models\Image;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * @package App\Models\Image
 * @property $id
 * @property $url
 */
class Image extends Model
{

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
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }

}
