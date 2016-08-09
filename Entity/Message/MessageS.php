<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use CoffeeBike\OwasysBundle\Entity\AbstractMessage;
use Doctrine\ORM\Mapping as ORM;

/**
 * MessageS
 */
class MessageS extends AbstractMessage
{
    /**
     * @var integer
     */
    private $duration;

    /**
     * @var float
     */
    private $vPeak;

    /**
     * @var float
     */
    private $startLat;

    /**
     * @var float
     */
    private $startLon;

    /**
     * @var float
     */
    private $endLat;

    /**
     * @var float
     */
    private $endLon;


    /**
     * Set duration
     *
     * @param integer $duration
     * @return MessageS
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set vPeak
     *
     * @param float $vPeak
     * @return MessageS
     */
    public function setVPeak($vPeak)
    {
        $this->vPeak = $vPeak;

        return $this;
    }

    /**
     * Get vPeak
     *
     * @return float
     */
    public function getVPeak()
    {
        return $this->vPeak;
    }

    /**
     * Set startLat
     *
     * @param float $startLat
     * @return MessageS
     */
    public function setStartLat($startLat)
    {
        $this->startLat = $startLat;

        return $this;
    }

    /**
     * Get startLat
     *
     * @return float
     */
    public function getStartLat()
    {
        return $this->startLat;
    }

    /**
     * Set startLon
     *
     * @param float $startLon
     * @return MessageS
     */
    public function setStartLon($startLon)
    {
        $this->startLon = $startLon;

        return $this;
    }

    /**
     * Get startLon
     *
     * @return float
     */
    public function getStartLon()
    {
        return $this->startLon;
    }

    /**
     * Set endLat
     *
     * @param float $endLat
     * @return MessageS
     */
    public function setEndLat($endLat)
    {
        $this->endLat = $endLat;

        return $this;
    }

    /**
     * Get endLat
     *
     * @return float
     */
    public function getEndLat()
    {
        return $this->endLat;
    }

    /**
     * Set endLon
     *
     * @param float $endLon
     * @return MessageS
     */
    public function setEndLon($endLon)
    {
        $this->endLon = $endLon;

        return $this;
    }

    /**
     * Get endLon
     *
     * @return float
     */
    public function getEndLon()
    {
        return $this->endLon;
    }
}
