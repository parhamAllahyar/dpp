<?php

namespace App\Patterns\COR;

abstract class OrderAcceptance
{
    
    protected $successor;

    
    abstract public function handle($request,$product);

   
    public function succeedWith(OrderAcceptance $successor)
    {
        $this->successor = $successor;
    }

  
    public function next($request, $product)
    {
        if ($this->successor) {
            $this->successor->handle($request, $product);
        }
}}
