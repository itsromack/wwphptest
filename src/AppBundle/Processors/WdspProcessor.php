<?php

namespace AppBundle\Processors;

class WdspProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getWdsp());
        }
        return implode(',', $list);
    }
}