<?php

namespace AppBundle\Processors;

class GustProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getGust());
        }
        return implode(',', $list);
    }
}