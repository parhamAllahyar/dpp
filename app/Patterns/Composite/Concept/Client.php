<?php

namespace Src\Concept;
class Client
{
    private $component;

    /**
     * @param Component $component
     */
    public function __construct( Component $component)
    {
        $this->component = $component;
    }


}
