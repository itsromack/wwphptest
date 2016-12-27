<?php

namespace AppBundle\Processors;

class DewpProcessor extends Processor
{
    public function process($items)
    {
        $list = [];
        foreach ($items as $item)
        {
            $list[] = $this->roundUp($item->getDewp());
        }
        return implode(',', $list);
    }
}