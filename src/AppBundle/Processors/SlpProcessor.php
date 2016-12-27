<?php

namespace AppBundle\Processors;

class SlpProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getSlp());
        }
        return implode(',', $list);
    }
}