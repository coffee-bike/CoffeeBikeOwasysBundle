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
}
