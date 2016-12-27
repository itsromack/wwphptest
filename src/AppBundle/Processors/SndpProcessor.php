<?php

namespace AppBundle\Processors;

class SndpProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getSndp());
        }
        return implode(',', $list);
    }
}