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
     * @param string $phone
     * @param string $message
     * @param string $source
     * @return Order
     */
    public function create(string $name, string $phone, string $message, string $source = null)
    {
        if (!$source) {
            $source = 'Twin Turbo';
        }
        return new Order([
            'made_by' => $name,
            'phone' => $phone ? '+38' . $phone : '',
            'message' => $message,
            'source' => $source
        ]);
    }
}