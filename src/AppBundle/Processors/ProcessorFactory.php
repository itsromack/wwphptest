<?php

namespace AppBundle\Processors;

use AppBundle\Entity\WWData;
use AppBundle\Processors\DewpProcessor;
use AppBundle\Processors\FrshttProcessor;
use AppBundle\Processors\GustProcessor;
use AppBundle\Processors\MaxProcessor;
use AppBundle\Processors\MinProcessor;
use AppBundle\Processors\MxspdProcessor;
use AppBundle\Processors\PrcpProcessor;
use AppBundle\Processors\SlpProcessor;
use AppBundle\Processors\SndpProcessor;
use AppBundle\Processors\StnProcessor;
use AppBundle\Processors\StpProcessor;
use AppBundle\Processors\TempProcessor;
use AppBundle\Processors\VisibProcessor;
use AppBundle\Processors\WbanProcessor;
use AppBundle\Processors\WdspProcessor;
use AppBundle\Processors\YearmodaProcessor;
use \ReflectionClass;

class ProcessorFactory
{
    public function create($field)
    {
        if (empty($field))
        {
            return null;
        }

        if (!$this->is_valid_field($field))
        {
            return null;
        }

        $instance = $this->getInstance($field);
        return $instance;
    }

    public function is_valid_field($field)
    {
        $field = strtoupper($field);

        // parse through all the properties of the WWData entity
        $reflector = new ReflectionClass('\AppBundle\Entity\WWData');
        $properties = $reflector->getProperties();

        foreach ($properties as $prop)
        {
            if ($field == strtoupper($prop->name))
            {
                return true;
            }
        }

        // MAX is for maxRecord field
        // MIN is for minRecord field
        if (in_array($field, ['MAX', 'MIN']))
        {
            return true;
        }

        return false;
    }

    public function getInstance($field)
    {
        $field = strtoupper($field);
        if ($field == 'DEWP') return new DewpProcessor;
        if ($field == 'FRSHTT') return new FrshttProcessor;
        if ($field == 'GUST') return new GustProcessor;
        if ($field == 'MAX') return new MaxProcessor;
        if ($field == 'MIN') return new MinProcessor;
        if ($field == 'MXSPD') return new MxspdProcessor;
        if ($field == 'PRCP') return new PrcpProcessor;
        if ($field == 'SLP') return new SlpProcessor;
        if ($field == 'SNDP') return new SndpProcessor;
        if ($field == 'STN') return new StnProcessor;
        if ($field == 'STP') return new StpProcessor;
        if ($field == 'TEMP') return new TempProcessor;
        if ($field == 'VISIB') return new VisibProcessor;
        if ($field == 'WBAN') return new WbanProcessor;
        if ($field == 'WDSP') return new WdspProcessor;
        if ($field == 'YEARMODA') return new YearmodaProcessor;
        return null;
    }
}