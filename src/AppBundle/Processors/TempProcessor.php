<?php

namespace AppBundle\Processors;

class TempProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getTemp());
        }
        return implode(',', $list);
    }
}