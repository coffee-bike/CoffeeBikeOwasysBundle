<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use CoffeeBike\OwasysBundle\Entity\AbstractMessage;
use Doctrine\ORM\Mapping as ORM;

/**
 * MessageV
 */
class MessageV extends AbstractMessage
{
    /**
     * @var boolean
     */
    private $movement;


    /**
     * Set movement
     *
     * @param boolean $movement
     * @return MessageV
     */
    public function setMovement($movement)
    {
        $this->movement = $movement;

        return $this;
    }

    /**
     * Get movement
     *
     * @return boolean
     */
    public function getMovement()
    {
        return $this->movement;
    }
}
