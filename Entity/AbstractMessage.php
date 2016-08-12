<?php

namespace CoffeeBike\OwasysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbstractMessage
 */
class AbstractMessage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $triggerSource;

    /**
     * @var integer
     */
    private $timestamp;

    /**
     * @var Tracker
     */
    private $tracker;


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
     * Set triggerSource
     *
     * @param string $triggerSource
     * @return AbstractMessage
     */
    public function setTriggerSource($triggerSource)
    {
        $this->triggerSource = $triggerSource;

        return $this;
    }

    /**
     * Get triggerSource
     *
     * @return string
     */
    public function getTriggerSource()
    {
        return $this->triggerSource;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     * @return AbstractMessage
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set tracker
     *
     * @param Tracker $tracker
     * @return AbstractMessage
     */
    public function setTracker(Tracker $tracker)
    {
        $this->tracker = $tracker;

        return $this;
    }

    /**
     * Get tracker
     *
     * @return Tracker
     */
    public function getTracker()
    {
        return $this->tracker;
    }
}
