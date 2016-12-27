<?php

namespace AppBundle\Processors;

class VisibProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $item->getVisib();
        }
        return implode(',', $list);
    }
}