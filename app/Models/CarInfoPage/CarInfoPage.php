<?php

namespace App\Models\CarInfoPage;

use App\Events\CarInfoPage\CarInfoPageDeleted;
use App\Events\CarInfoPage\CarInfoPageUpdated;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CarInfoPage
 * @package App\Models\CarInfoPage
 * @property int $id
 * @property string $page_alias
 * @property string $brand
 * @property string $brand_addition
 * @property string $models
 * @property int $min_price
 * @property int $max_price
 * @property string $standard
 * @property string $capital
 * @property string $image_path
 */
class CarInfoPage extends Model
{

    protected $fillable = [
        'page_alias',
        'brand',
        'brand_additional',
        'models',
        'min_price',
        'max_price',
        'standard',
        'capital'
    ];

    protected $dispatchesEvents = [
        'updated' => CarInfoPageUpdated::class,
        'deleted' => CarInfoPageDeleted::class
    ];

    /**
     * @return string
     */
    public function getImagePath(): string
    {
        return $this->image_path;
    }

    /**
     * @param string $image_path
     */
    public function setImagePath(string $image_path): void
    {
        $this->image_path = $image_path;
    }

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
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getBrandAdditional(): string
    {
        return $this->brand_addition ?? '';
    }

    /**
     * @param string $brand_additional
     */
    public function setBrandAdditional(string $brand_additional): void
    {
        $this->brand_addition = $brand_additional;
    }

    /**
     * @return string
     */
    public function getModels(): string
    {
        return $this->models ?? '';
    }

    /**
     * @param string $models
     */
    public function setModels(string $models): void
    {
        $this->models = $models;
    }

    /**
     * @return int
     */
    public function getMinPrice(): int
    {
        return $this->min_price;
    }

    /**
     * @param int $min_price
     */
    public function setMinPrice(int $min_price): void
    {
        $this->min_price = $min_price;
    }

    /**
     * @return int
     */
    public function getMaxPrice(): int
    {
        return $this->max_price;
    }

    /**
     * @param int $max_price
     */
    public function setMaxPrice(int $max_price): void
    {
        $this->max_price = $max_price;
    }

    /**
     * @return string
     */
    public function getStandard(): string
    {
        return $this->standard;
    }

    /**
     * @param string $standard
     */
    public function setStandard(string $standard): void
    {
        $this->standard = $standard;
    }

    /**
     * @return string
     */
    public function getCapital(): string
    {
        return $this->capital;
    }

    /**
     * @param string $capital
     */
    public function setCapital(string $capital): void
    {
        $this->capital = $capital;
    }

}
