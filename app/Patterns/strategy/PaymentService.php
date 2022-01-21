<?php

namespace App\Patterns\Strategy;

class PaymentService
{
    private $paymentMethod;

    public function setPaymentMethod(PaymentMethod $method)
    {
       
        $this->paymentMethod = $method;
    }

    public function pay()
    {
        $this->paymentMethod->payment();
    }
}
