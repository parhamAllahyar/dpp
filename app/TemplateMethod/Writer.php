<?php

namespace App\TemplateMethod;

abstract class Writer
{
    abstract protected function draft();
    abstract protected function failsReview($document);
    abstract protected function revise($document);

    public function write()
    {
        return $this->draft();
    }
}
