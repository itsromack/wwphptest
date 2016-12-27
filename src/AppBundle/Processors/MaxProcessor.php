<?php

namespace AppBundle\Processors;

class MaxProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getMaxRecord());
        }
        return implode(',', $list);
    }
}