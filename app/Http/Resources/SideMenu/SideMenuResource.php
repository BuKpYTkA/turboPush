<?php

namespace App\Http\Resources\SideMenu;

use App\Models\SideMenu\SideMenu;
use Encore\Admin\Auth\Database\Menu;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Class SideMenuResource
 * @package App\Http\Resources\SideMenu
 */
class SideMenuResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        /**
         * @var SideMenu $this
         */
        return [
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'icon' => $this->getIcon(),
            'subMenu' => self::collection($this->resource->getRelation('subMenu')),
            'uri' => $this->getUri()
        ];
    }
}
