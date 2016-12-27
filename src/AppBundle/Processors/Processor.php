<?php

namespace AppBundle\Processors;

class Processor
{
    /**
     * Rounds up the WWData item to nearest integer
     * @return Float or NULL
     */
    public function roundUp($foo)
    {
        if (is_numeric($foo))
        {
            return ceil($foo);
        }
        return null;
    }
}