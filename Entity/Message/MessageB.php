<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use CoffeeBike\OwasysBundle\Entity\AbstractMessage;
use Doctrine\ORM\Mapping as ORM;

/**
 * MessageB
 */
class MessageB extends AbstractMessage
{
    /**
     * @var integer
     */
    private $byeCode;


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
