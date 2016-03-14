<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageE
 */
class MessageE
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $errorCode;

    /**
     * @var string
     */
    private $text;


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
