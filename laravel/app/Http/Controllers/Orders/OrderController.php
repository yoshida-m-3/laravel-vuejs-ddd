<?php

namespace App\Http\Controllers\Orders;

use App\Http\Requests\Orders\OrderCreateRequest;
use App\Http\Requests\Orders\OrderFindRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Packages\Applications\Orders\Create\OrderCreateInputData;
use Packages\Applications\Orders\Create\OrderCreateUseCase;
use Packages\Applications\Orders\Find\OrderFindUseCase;

class OrderController extends Controller
{
    public function find(
        OrderFindRequest $request,
        OrderFindUseCase $useCase
    ): JsonResponse {
        $data = $request->validated();

        $order = $useCase->find($data['orderId']);

        return response()->json($order === null ? null : [
            'id' => $order->id,
            'orderNumber' => $order->orderNumber,
            'orderDatetime' => $order->orderDatetime,
        ]);
    }

    public function create(
        OrderCreateRequest $request,
        OrderCreateUseCase $useCase
    ): JsonResponse {
        $data = $request->validated();
        $inputData = new OrderCreateInputData($data['orderNumber']);

        $orderId = $useCase->create($inputData);

        return response()->json([
            'orderId' => $orderId,
        ]);
    }
}
