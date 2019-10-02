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
     * @return void
     */
    public function __invoke(Request $request, Order $order)
    {
        $order->setIsModerated(true);
        $order->save();
        echo '<p>Заказ был успешно отмечен, как "выполнен"</p>';
    }
}
