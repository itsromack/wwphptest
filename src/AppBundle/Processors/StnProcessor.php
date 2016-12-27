<?php

namespace AppBundle\Processors;

class StnProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $item->getStn();
        }
        return implode(',', $list);
    }
}