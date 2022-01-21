<?php

namespace App\Patterns\COR\Verifiers;

use App\Patterns\COR\OrderAcceptance;

class UserVerified extends OrderAcceptance
{ 
    public function handle($request,$product)
    {
        if ( $product == 13) {
            abort(422, 'product con not be shipped to you');
        }
        $this->next($request, $product);
    }

}
