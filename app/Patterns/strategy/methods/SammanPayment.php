<?php

namespace App\Patterns\Strategy\Methods;

use App\Patterns\Strategy\PaymentMethod;

class SammanPayment implements PaymentMethod
{
    public function payment(){
      
        return "deedde";
    }
}
