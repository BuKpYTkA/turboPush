<?php

namespace App\Http\Controllers\Order;

use App\Http\Requests\Order\CreateOrderRequest;
use App\Services\Factories\OrderFactory\OrderFactory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateOrderController extends Controller
{

    /**
     * @var OrderFactory
     */
    private $orderFactory;

    /**
     * CreateOrderController constructor.
     * @param OrderFactory $orderFactory
     */
    public function __construct(OrderFactory $orderFactory)
    {
        $this->orderFactory = $orderFactory;
    }

    /**
     * Handle the incoming request.
     *
     * @param CreateOrderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(CreateOrderRequest $request)
    {
        $madeBy = $request->input('name');
        $phone = $request->input('phone') ?? '';
        $message = $request->input('message');
        $order = $this->orderFactory->create($madeBy, $phone, $message);
        $order->save();
        return back()->with('ok', 'Ваша заявка была успешно зарегестрирована');
    }
}
