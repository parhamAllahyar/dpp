<?php

namespace App\Patterns\Factory;

class goldAccount implements Account
{
    public function interestRate()
    {
        return .75;
    }

    public function minimumBalanceDefinition()
    {
        return  5005539000;
    }
}
