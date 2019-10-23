<?php

namespace App\Http\Controllers\Order;

use App\Http\Requests\Order\CreateOrderRequest;
use App\Services\Factories\BlackListItemFactory\BlackListItemFactory;
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
     * @var BlackListItemFactory
     */
    private $blackListItemFactory;

    /**
     * CreateOrderController constructor.
     * @param OrderFactory $orderFactory
     * @param BlackListItemFactory $blackListItemFactory
     */
    public function __construct(OrderFactory $orderFactory, BlackListItemFactory $blackListItemFactory)
    {
        $this->orderFactory = $orderFactory;
        $this->blackListItemFactory = $blackListItemFactory;
    }

    /**
     * Handle the incoming request.
     *
     * @param CreateOrderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(CreateOrderRequest $request)
    {
        $botChecker = $request->input('consumer') ?? '';
        if ($botChecker !== '') {
            $blackListItem = $this->blackListItemFactory->makeFromRequest($request);
            $blackListItem->save();
            abort(403);
        }
        $madeBy = $request->input('name');
        $phone = $request->input('phone') ?? '';
        $message = $request->input('message');
        $order = $this->orderFactory->create($madeBy, $phone, $message);
        $order->save();
        return back()->with('ok', 'Ваша заявка была успешно зарегестрирована');
    }
}
