<?php

namespace AppBundle\Processors;

class PrcpProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getPrcp());
        }
        return implode(',', $list);
    }
}