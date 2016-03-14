<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageV
 */
class MessageV
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $movement;


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
