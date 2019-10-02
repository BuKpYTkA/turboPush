<?php

namespace App\Http\Controllers\Order;

use App\Models\Order\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfirmOrderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Order $order
     * @return string
     */
    public function __invoke(Request $request, Order $order)
    {
        if ($order->is_moderated) {
            return '<p>Заказ уже отмечен как "выполненный"</p>';
        }
        $order->setIsModerated(true);
        $order->save();
        return '<p>Заказ был успешно отмечен, как "выполнен"</p>';
    }
}
