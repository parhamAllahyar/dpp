<?php

namespace App\Patterns\Facade;

class Facade
{
    protected $subsystem1;
    protected $subsystem2;

    public function __construct(
    
        Subsystem1 $subsystem1,
        Subsystem2 $subsystem2
    ) {
        
        $this->subsystem1 = $subsystem1;
        $this->subsystem2 = $subsystem2;
     
    }

    public function opration()
    {
        $a = $this->subsystem1->operation1();
       
        $b = $this->subsystem2->operation1();
         
        // dd($a + $b);
         
        return $a + $b;
    }
}
