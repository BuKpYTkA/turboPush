<?php

namespace App\Models\Image;

use App\Events\Image\ImageDeleted;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * @package App\Models\Image
 * @property int $id
 * @property string $url
 * @property string $alt
 */
class Image extends Model
{

    /**
     * @var array
     */
    protected $dispatchesEvents = [
        'deleted' => ImageDeleted::class
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
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return null|string
     */
    public function getAlt(): string
    {
        return $this->alt ?? '';
    }

    /**
     * @param null|string $alt
     */
    public function setAlt(?string $alt): void
    {
        $this->alt = $alt;
    }

}
