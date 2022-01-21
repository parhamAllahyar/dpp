<?php

namespace App\Patterns\COR\Verifiers;

use App\Patterns\COR\OrderAcceptance;

class OrderCanShip extends OrderAcceptance
{
    public function handle($request, $product)
    {
        if ($product == 12) {
            abort(422, 'product con not be shipped to you');
        }
        $this->next($request, $product);
    }
}
