<?php

namespace App\Models\Order;

use App\Events\Order\OrderCreated;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App\Models\Order
 * @property $id
 * @property $made_by
 * @property $phone
 * @property $message
 * @property $is_moderated
 * @property $is_resolved
 */
class Order extends Model
{

    protected $dispatchesEvents = [
        'created' => OrderCreated::class
    ];

    protected $fillable = [
        'made_by',
        'phone',
        'message'
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
    public function getMadeBy()
    {
        return $this->made_by;
    }

    /**
     * @param mixed $made_by
     */
    public function setMadeBy($made_by): void
    {
        $this->made_by = $made_by;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getIsModerated()
    {
        return $this->is_moderated;
    }

    /**
     * @param mixed $is_moderated
     */
    public function setIsModerated($is_moderated): void
    {
        $this->is_moderated = $is_moderated;
    }

    /**
     * @return mixed
     */
    public function getIsResolved()
    {
        return $this->is_resolved;
    }

    /**
     * @param mixed $is_resolved
     */
    public function setIsResolved($is_resolved): void
    {
        $this->is_resolved = $is_resolved;
    }

}
