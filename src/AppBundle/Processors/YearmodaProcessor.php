<?php

namespace AppBundle\Processors;

class YearmodaProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getYearmoda());
        }
        return implode(',', $list);
    }
}