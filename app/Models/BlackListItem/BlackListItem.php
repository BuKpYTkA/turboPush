<?php

namespace App\Models\BlackListItem;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BlackListItem
 * @package App\Models\BlackListItem
 * @property int $id
 * @property string $ip
 * @property string $additional_information
 * @property string $created_at
 * @property string $updated_at
 * @property $status
 */
class BlackListItem extends Model
{

    /**
     * @var string
     */
    protected $table = 'black_list';

    /**
     * @var array
     */
    protected $fillable = [
        'ip',
        'additional_information',
        'status'
    ];

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     */
    public function setIp(string $ip): void
    {
        $this->ip = $ip;
    }

    /**
     * @return string
     */
    public function getAdditionalInformation()
    {
        return $this->additional_information;
    }

    /**
     * @param string $additional_information
     */
    public function setAdditionalInformation(string $additional_information): void
    {
        $this->additional_information = $additional_information;
    }

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

}
