<?php

namespace App\Http\Controllers;

use App\Services\ByOneGetOneService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $bogofService;

    public function __construct(ByOneGetOneService $bogofService)
    {
        $this->bogofService = $bogofService;
    }

    public function createOrder(Request $request)
    {
        $productIds = $request->input('products');

        $request->validate([
            'products' => 'required|array'
        ]);

        $result = $this->bogofService->applyBogof($productIds);

        return response()->json([
            'discountedItems' => $result['discountedItems'],
            'payableItems' => $result['payableItems']
        ]);
    }
}
