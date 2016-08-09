<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use CoffeeBike\OwasysBundle\Entity\AbstractMessage;
use Doctrine\ORM\Mapping as ORM;

/**
 * MessageE
 */
class MessageE extends AbstractMessage
{
    /**
     * @var integer
     */
    private $errorCode;

    /**
     * @var string
     */
    private $text;


    /**
     * Set errorCode
     *
     * @param integer $errorCode
     * @return MessageE
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Get errorCode
     *
     * @return integer
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return MessageE
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
