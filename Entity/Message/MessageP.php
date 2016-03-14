<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageP
 */
class MessageP
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $gX;

    /**
     * @var float
     */
    private $gY;

    /**
     * @var float
     */
    private $gZ;

    /**
     * @var float
     */
    private $lat;

    /**
     * @var float
     */
    private $lon;

    /**
     * @var integer
     */
    private $lastGpsTs;


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
     * Set gX
     *
     * @param float $gX
     * @return MessageP
     */
    public function setGX($gX)
    {
        $this->gX = $gX;

        return $this;
    }

    /**
     * Get gX
     *
     * @return float 
     */
    public function getGX()
    {
        return $this->gX;
    }

    /**
     * Set gY
     *
     * @param float $gY
     * @return MessageP
     */
    public function setGY($gY)
    {
        $this->gY = $gY;

        return $this;
    }

    /**
     * Get gY
     *
     * @return float 
     */
    public function getGY()
    {
        return $this->gY;
    }

    /**
     * Set gZ
     *
     * @param float $gZ
     * @return MessageP
     */
    public function setGZ($gZ)
    {
        $this->gZ = $gZ;

        return $this;
    }

    /**
     * Get gZ
     *
     * @return float 
     */
    public function getGZ()
    {
        return $this->gZ;
    }

    /**
     * Set lat
     *
     * @param float $lat
     * @return MessageP
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lon
     *
     * @param float $lon
     * @return MessageP
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon
     *
     * @return float 
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set lastGpsTs
     *
     * @param integer $lastGpsTs
     * @return MessageP
     */
    public function setLastGpsTs($lastGpsTs)
    {
        $this->lastGpsTs = $lastGpsTs;

        return $this;
    }

    /**
     * Get lastGpsTs
     *
     * @return integer 
     */
    public function getLastGpsTs()
    {
        return $this->lastGpsTs;
    }
}
