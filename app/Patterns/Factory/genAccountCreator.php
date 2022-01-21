<?php

namespace App\Patterns\Factory;

class genAccountCreator extends AccountCreator
{
     protected function getAccount():Account{
         return new genAccount();
     }
}
