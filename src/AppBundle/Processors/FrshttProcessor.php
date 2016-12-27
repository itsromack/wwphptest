<?php

namespace AppBundle\Processors;

class FrshttProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $item->getFrshtt();
        }
        return implode(',', $list);
    }
}