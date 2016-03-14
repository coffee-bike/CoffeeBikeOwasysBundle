<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageB
 */
class MessageB
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $byeCode;


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
     * Set byeCode
     *
     * @param integer $byeCode
     * @return MessageB
     */
    public function setByeCode($byeCode)
    {
        $this->byeCode = $byeCode;

        return $this;
    }

    /**
     * Get byeCode
     *
     * @return integer 
     */
    public function getByeCode()
    {
        return $this->byeCode;
    }
}
