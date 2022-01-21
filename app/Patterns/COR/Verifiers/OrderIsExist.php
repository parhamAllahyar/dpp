<?php

namespace App\Patterns\COR\Verifiers;

use App\Patterns\COR\OrderAcceptance;

class OrderIsExist extends OrderAcceptance
{
    public function handle($request,$product)
    {
        if ($product == 14) {
            abort(422, 'NO 14');
        }
        $this->next($request, $product);
    }
}
