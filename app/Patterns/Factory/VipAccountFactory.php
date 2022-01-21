<?php

namespace App\Patterns\Factory;

class VipAccountFactory extends AccountCreator
{
    protected function getAccount(): Account
    {
        return new VipAccount();
    }
}
