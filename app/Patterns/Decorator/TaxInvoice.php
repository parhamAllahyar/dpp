<?php

namespace App\Patterns\Decorator;

use App\Models\Invoice;

class TaxInvoice extends InvoicePriceDecorator
{
public function Price()
{
    return parent::price() + 800;
}

}
