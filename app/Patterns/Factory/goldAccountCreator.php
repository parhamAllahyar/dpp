<?php

namespace App\Patterns\Factory;

class goldAccountCreator extends AccountCreator
{
     protected function getAccount():Account{

        return new goldAccount();
    }
}
