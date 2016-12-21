<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WWData
 *
 * @ORM\Table(name="w_w_data")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WWDataRepository")
 */
class WWData
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="stn", type="string", length=20)
     */
    private $stn;

    /**
     * @var int
     *
     * @ORM\Column(name="wban", type="integer", nullable=true)
     */
    private $wban;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="yearmoda", type="date", nullable=true)
     */
    private $yearmoda;

    /**
     * @var float
     *
     * @ORM\Column(name="temp", type="float", nullable=true)
     */
    private $temp;

    /**
     * @var int
     *
     * @ORM\Column(name="temp_n", type="integer", nullable=true)
     */
    private $tempN;

    /**
     * @var float
     *
     * @ORM\Column(name="dewp", type="float", nullable=true)
     */
    private $dewp;

    /**
     * @var int
     *
     * @ORM\Column(name="dewp_n", type="integer", nullable=true)
     */
    private $dewpN;

    /**
     * @var float
     *
     * @ORM\Column(name="slp", type="float", nullable=true)
     */
    private $slp;

    /**
     * @var int
     *
     * @ORM\Column(name="slp_n", type="integer", nullable=true)
     */
    private $slpN;

    /**
     * @var float
     *
     * @ORM\Column(name="stp", type="float", nullable=true)
     */
    private $stp;

    /**
     * @var int
     *
     * @ORM\Column(name="stp_n", type="integer", nullable=true)
     */
    private $stpN;

    /**
     * @var float
     *
     * @ORM\Column(name="visib", type="float", nullable=true)
     */
    private $visib;

    /**
     * @var int
     *
     * @ORM\Column(name="visib_n", type="integer", nullable=true)
     */
    private $visibN;

    /**
     * @var float
     *
     * @ORM\Column(name="wdsp", type="float", nullable=true)
     */
    private $wdsp;

    /**
     * @var int
     *
     * @ORM\Column(name="wdsp_n", type="integer", nullable=true)
     */
    private $wdspN;

    /**
     * @var float
     *
     * @ORM\Column(name="mxspd", type="float", nullable=true)
     */
    private $mxspd;

    /**
     * @var float
     *
     * @ORM\Column(name="gust", type="float", nullable=true)
     */
    private $gust;

    /**
     * @var float
     *
     * @ORM\Column(name="max_record", type="float", nullable=true)
     */
    private $maxRecord;

    /**
     * @var float
     *
     * @ORM\Column(name="min_record", type="float", nullable=true)
     */
    private $minRecord;

    /**
     * @var float
     *
     * @ORM\Column(name="prcp", type="float", nullable=true)
     */
    private $prcp;

    /**
     * @var float
     *
     * @ORM\Column(name="sndp", type="float", nullable=true)
     */
    private $sndp;

    /**
     * @var int
     *
     * @ORM\Column(name="frshtt", type="integer", nullable=true)
     */
    private $frshtt;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set stn
     *
     * @param string $stn
     * @return WWData
     */
    public function setStn($stn)
    {
        $this->stn = $stn;

        return $this;
    }

    /**
     * Get stn
     *
     * @return string 
     */
    public function getStn()
    {
        return $this->stn;
    }

    /**
     * Set wban
     *
     * @param integer $wban
     * @return WWData
     */
    public function setWban($wban)
    {
        $this->wban = $wban;

        return $this;
    }

    /**
     * Get wban
     *
     * @return integer 
     */
    public function getWban()
    {
        return $this->wban;
    }

    /**
     * Set yearmoda
     *
     * @param \DateTime $yearmoda
     * @return WWData
     */
    public function setYearmoda($yearmoda)
    {
        $this->yearmoda = $yearmoda;

        return $this;
    }

    /**
     * Get yearmoda
     *
     * @return \DateTime 
     */
    public function getYearmoda()
    {
        return $this->yearmoda;
    }

    /**
     * Set temp
     *
     * @param float $temp
     * @return WWData
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp
     *
     * @return float 
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set tempN
     *
     * @param integer $tempN
     * @return WWData
     */
    public function setTempN($tempN)
    {
        $this->tempN = $tempN;

        return $this;
    }

    /**
     * Get tempN
     *
     * @return integer 
     */
    public function getTempN()
    {
        return $this->tempN;
    }

    /**
     * Set dewp
     *
     * @param float $dewp
     * @return WWData
     */
    public function setDewp($dewp)
    {
        $this->dewp = $dewp;

        return $this;
    }

    /**
     * Get dewp
     *
     * @return float 
     */
    public function getDewp()
    {
        return $this->dewp;
    }

    /**
     * Set dewpN
     *
     * @param integer $dewpN
     * @return WWData
     */
    public function setDewpN($dewpN)
    {
        $this->dewpN = $dewpN;

        return $this;
    }

    /**
     * Get dewpN
     *
     * @return integer 
     */
    public function getDewpN()
    {
        return $this->dewpN;
    }

    /**
     * Set slp
     *
     * @param float $slp
     * @return WWData
     */
    public function setSlp($slp)
    {
        $this->slp = $slp;

        return $this;
    }

    /**
     * Get slp
     *
     * @return float 
     */
    public function getSlp()
    {
        return $this->slp;
    }

    /**
     * Set slpN
     *
     * @param integer $slpN
     * @return WWData
     */
    public function setSlpN($slpN)
    {
        $this->slpN = $slpN;

        return $this;
    }

    /**
     * Get slpN
     *
     * @return integer 
     */
    public function getSlpN()
    {
        return $this->slpN;
    }

    /**
     * Set stp
     *
     * @param float $stp
     * @return WWData
     */
    public function setStp($stp)
    {
        $this->stp = $stp;

        return $this;
    }

    /**
     * Get stp
     *
     * @return float 
     */
    public function getStp()
    {
        return $this->stp;
    }

    /**
     * Set stpN
     *
     * @param integer $stpN
     * @return WWData
     */
    public function setStpN($stpN)
    {
        $this->stpN = $stpN;

        return $this;
    }

    /**
     * Get stpN
     *
     * @return integer 
     */
    public function getStpN()
    {
        return $this->stpN;
    }

    /**
     * Set visib
     *
     * @param float $visib
     * @return WWData
     */
    public function setVisib($visib)
    {
        $this->visib = $visib;

        return $this;
    }

    /**
     * Get visib
     *
     * @return float 
     */
    public function getVisib()
    {
        return $this->visib;
    }

    /**
     * Set visibN
     *
     * @param integer $visibN
     * @return WWData
     */
    public function setVisibN($visibN)
    {
        $this->visibN = $visibN;

        return $this;
    }

    /**
     * Get visibN
     *
     * @return integer 
     */
    public function getVisibN()
    {
        return $this->visibN;
    }

    /**
     * Set wdsp
     *
     * @param float $wdsp
     * @return WWData
     */
    public function setWdsp($wdsp)
    {
        $this->wdsp = $wdsp;

        return $this;
    }

    /**
     * Get wdsp
     *
     * @return float 
     */
    public function getWdsp()
    {
        return $this->wdsp;
    }

    /**
     * Set wdspN
     *
     * @param integer $wdspN
     * @return WWData
     */
    public function setWdspN($wdspN)
    {
        $this->wdspN = $wdspN;

        return $this;
    }

    /**
     * Get wdspN
     *
     * @return integer 
     */
    public function getWdspN()
    {
        return $this->wdspN;
    }

    /**
     * Set mxspd
     *
     * @param float $mxspd
     * @return WWData
     */
    public function setMxspd($mxspd)
    {
        $this->mxspd = $mxspd;

        return $this;
    }

    /**
     * Get mxspd
     *
     * @return float 
     */
    public function getMxspd()
    {
        return $this->mxspd;
    }

    /**
     * Set gust
     *
     * @param float $gust
     * @return WWData
     */
    public function setGust($gust)
    {
        $this->gust = $gust;

        return $this;
    }

    /**
     * Get gust
     *
     * @return float 
     */
    public function getGust()
    {
        return $this->gust;
    }

    /**
     * Set maxRecord
     *
     * @param float $maxRecord
     * @return WWData
     */
    public function setMaxRecord($maxRecord)
    {
        $this->maxRecord = $maxRecord;

        return $this;
    }

    /**
     * Get maxRecord
     *
     * @return float 
     */
    public function getMaxRecord()
    {
        return $this->maxRecord;
    }

    /**
     * Set minRecord
     *
     * @param float $minRecord
     * @return WWData
     */
    public function setMinRecord($minRecord)
    {
        $this->minRecord = $minRecord;

        return $this;
    }

    /**
     * Get minRecord
     *
     * @return float 
     */
    public function getMinRecord()
    {
        return $this->minRecord;
    }

    /**
     * Set prcp
     *
     * @param float $prcp
     * @return WWData
     */
    public function setPrcp($prcp)
    {
        $this->prcp = $prcp;

        return $this;
    }

    /**
     * Get prcp
     *
     * @return float 
     */
    public function getPrcp()
    {
        return $this->prcp;
    }

    /**
     * Set sndp
     *
     * @param float $sndp
     * @return WWData
     */
    public function setSndp($sndp)
    {
        $this->sndp = $sndp;

        return $this;
    }

    /**
     * Get sndp
     *
     * @return float 
     */
    public function getSndp()
    {
        return $this->sndp;
    }

    /**
     * Set frshtt
     *
     * @param integer $frshtt
     * @return WWData
     */
    public function setFrshtt($frshtt)
    {
        $this->frshtt = $frshtt;

        return $this;
    }

    /**
     * Get frshtt
     *
     * @return integer 
     */
    public function getFrshtt()
    {
        return $this->frshtt;
    }
}
