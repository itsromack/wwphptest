<?php

namespace AppBundle\Processors;

class MinProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getMinRecord());
        }
        return implode(',', $list);
    }
}