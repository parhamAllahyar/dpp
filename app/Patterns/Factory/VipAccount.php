<?php

namespace App\Patterns\Factory;

class VipAccount implements Account
{
    public function interestRate()
    {
        return .23;
    }

    public function minimumBalanceDefinition()
    {
        return  50000000;
    }
}
