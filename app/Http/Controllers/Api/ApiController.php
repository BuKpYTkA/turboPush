<?php

namespace App\Http\Controllers\Api;

use App\Services\Factories\BlackListItemFactory\BlackListItemFactory;
use App\Services\Factories\OrderFactory\OrderFactory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
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
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function createOrder(Request $request)
    {
        $botChecker = $request->input('consumer') ?? '';
        if ($botChecker !== '') {
            $blackListItem = $this->blackListItemFactory->makeFromRequest($request);
            $blackListItem->save();
            return response(['status' => 'error', 'message' => 'Access denied'], 403);
        }
        $madeBy = $request->input('name');
        $phone = $request->input('phone') ?? '';
        $message = $request->input('message');
        $source = $request->input('source');
        $order = $this->orderFactory->create($madeBy, $phone, $message, $source);
        $order->save();
        return response(['status' => 'ok', 'message' => 'Order has been created successfully']);
    }

}
