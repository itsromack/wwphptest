<?php

namespace AppBundle\Processors;

class MxspdProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getMxspd());
        }
        return implode(',', $list);
    }
}