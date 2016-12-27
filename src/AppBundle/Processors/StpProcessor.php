<?php

namespace AppBundle\Processors;

class StpProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getStp());
        }
        return implode(',', $list);
    }
}