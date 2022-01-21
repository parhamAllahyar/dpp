<?php

namespace App\Patterns\Factory;

class genAccount implements Account
{
    public function interestRate()
    {
        return .34;
    }

    public function minimumBalanceDefinition()
    {
        return  500045000;
    }
}
