<?php

namespace App\Patterns\Factory;

abstract class AccountCreator
{

    public function account ()
    {
        return $this->getAccount();
    }

    abstract protected function getAccount(): Account;
}
