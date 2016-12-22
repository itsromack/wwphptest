<?php

namespace AppBundle\Helper;

use AppBundle\Entity\WWData;

/**
 * Description of WWDataLoader
 *
 * @author romack
 */
class WWDataLoader
{
    public function prepare($data)
    {
        $wwdata = new WWData();
        $wwdata->setStn($data[0]);
        $wwdata->setWban($data[1]);
        $wwdata->setYearmoda($data[2]);
        $wwdata->setTemp($data[3]);
        $wwdata->setTempN($data[4]);
        $wwdata->setDewp($data[5]);
        $wwdata->setDewpN($data[6]);
        $wwdata->setSlp($data[7]);
        $wwdata->setSlpN($data[8]);
        $wwdata->setStp($data[9]);
        $wwdata->setStpN($data[10]);
        $wwdata->setVisib($data[11]);
        $wwdata->setVisibN($data[12]);
        $wwdata->setWdsp($data[13]);
        $wwdata->setWdspN($data[14]);
        $wwdata->setMxspd($data[15]);
        $wwdata->setGust($data[16]);
        $wwdata->setMaxRecord($data[17]);
        $wwdata->setMinRecord($data[18]);
        $wwdata->setPrcp($data[19]);
        $wwdata->setSndp($data[20]);
        $wwdata->setFrshtt($data[21]);
        return $wwdata;
    }
}
