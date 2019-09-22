<?php

namespace App\Models\PhoneNumber;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PhoneNumber
 * @package App\Models\PhoneNumber
 * @property int $id
 * @property string $phone
 */
class PhoneNumber extends Model
{
    protected $fillable = [
        'phone'
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
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

}
