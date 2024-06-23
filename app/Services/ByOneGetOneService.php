<?php

namespace App\Services;

use App\Models\Product;

class ByOneGetOneService
{
    public function applyBogof($products)
    {
        // Input array of item prices
        $items = $products;
        $array_count = count($items);
        rsort($items);
 
        // Initialize arrays for discounted and payable items
        $discountedItems = [];
        $payableItems = [];

        // Categorize items based on condition
        $pay = 60;
        foreach ($items as $i => $item) {
            if ($item < $pay ) {
                $backkey = ($i < $array_count-1 && $i != 4) ? $i+1 : $i;
                $pay = $items[$backkey];
                $discountedItems[] = $item;
            } else {
                $backkey = ($i > 1 && $i < $array_count-1 & $i!=8) ? $i-1 : $i;
                $pay = $items[$backkey];
                $payableItems[] = $item;
            }
        }

        return [
            'discountedItems' => $discountedItems,
            'payableItems' => $payableItems
        ];
    }
}
