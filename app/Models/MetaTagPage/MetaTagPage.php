<?php

namespace App\Models\MetaTagPage;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MetaTagPage
 * @package App\Models\MetaTagPage
 * @property $id
 * @property $page_alias
 * @property $updated_by
 */
class MetaTagPage extends Model
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

}
