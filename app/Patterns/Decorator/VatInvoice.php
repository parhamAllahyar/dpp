<?php

namespace App\Patterns\Decorator;

use App\Models\Invoice;

class VatInvoice extends InvoicePriceDecorator
{

    public function Price()
    {
        return parent::price() + (parent::price() * 0.09);
    }
}
