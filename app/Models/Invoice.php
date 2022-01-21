<?php

namespace App\Models;

use App\Patterns\Decorator\InvoicePrice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model implements InvoicePrice
{
    use HasFactory;
    public function Price():int
    {
        return 4300;
    }
}
