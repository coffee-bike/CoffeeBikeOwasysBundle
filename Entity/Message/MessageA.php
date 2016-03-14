<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageA
 */
class MessageA
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $reason;

    /**
     * @var integer
     */
    private $info;

    /**
     * @var integer
     */
    private $km;


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
     * Set reason
     *
     * @param integer $reason
     * @return MessageA
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return integer 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set info
     *
     * @param integer $info
     * @return MessageA
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return integer 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set km
     *
     * @param integer $km
     * @return MessageA
     */
    public function setKm($km)
    {
        $this->km = $km;

        return $this;
    }

    /**
     * Get km
     *
     * @return integer 
     */
    public function getKm()
    {
        return $this->km;
    }
}
