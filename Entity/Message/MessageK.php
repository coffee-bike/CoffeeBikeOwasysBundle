<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use CoffeeBike\OwasysBundle\Entity\AbstractMessage;
use Doctrine\ORM\Mapping as ORM;

/**
 * MessageK
 */
class MessageK extends AbstractMessage
{
    /**
     * @var integer
     */
    private $km;


    /**
     * Set km
     *
     * @param integer $km
     * @return MessageK
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
