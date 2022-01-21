<?php

namespace App\Patterns\Decorator;

class InvoicePriceDecorator implements InvoicePrice
{
    private $invoicePrice;
    public function __construct(InvoicePrice $invoicePrice)
    {
        $this->invoicePrice = $invoicePrice;
    }

    public function Price()
    {
        return  $this->invoicePrice->price();
    }
}
