<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 11.09.2019
 * Time: 12:43
 */

namespace App\Services\Factories\OrderFactory;

use App\Models\Order\Order;

/**
 * Class OrderFactory
 * @package App\Services\Factories\OrderFactory
 */
class OrderFactory
{

    /**
     * @param string $name
     * @param string $email
     * @param string $phone
     * @param string $message
     * @return Order
     */
    public function create(string $name, string $email, string $phone, string $message)
    {
        return new Order([
            'made_by' => $name,
            'email' => $email,
            'phone' => $phone ? '+380' . $phone : '',
            'message' => $message
        ]);
    }
}