<?php

namespace AppBundle\Processors;

class WbanProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getWban());
        }
        return implode(',', $list);
    }
}