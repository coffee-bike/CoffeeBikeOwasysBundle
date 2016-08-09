<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use CoffeeBike\OwasysBundle\Entity\AbstractMessage;
use Doctrine\ORM\Mapping as ORM;

/**
 * MessageI
 */
class MessageI extends AbstractMessage
{
    /**
     * @var integer
     */
    private $iox;

    /**
     * @var integer
     */
    private $ioType;

    /**
     * @var integer
     */
    private $ioVal;

    /**
     * @var integer
     */
    private $intsToSend;

    /**
     * @var integer
     */
    private $intsElapsed;

    /**
     * @var integer
     */
    private $intsTotal;


    /**
     * Set iox
     *
     * @param integer $iox
     * @return MessageI
     */
    public function setIox($iox)
    {
        $this->iox = $iox;

        return $this;
    }

    /**
     * Get iox
     *
     * @return integer
     */
    public function getIox()
    {
        return $this->iox;
    }

    /**
     * Set ioType
     *
     * @param integer $ioType
     * @return MessageI
     */
    public function setIoType($ioType)
    {
        $this->ioType = $ioType;

        return $this;
    }

    /**
     * Get ioType
     *
     * @return integer
     */
    public function getIoType()
    {
        return $this->ioType;
    }

    /**
     * Set ioVal
     *
     * @param integer $ioVal
     * @return MessageI
     */
    public function setIoVal($ioVal)
    {
        $this->ioVal = $ioVal;

        return $this;
    }

    /**
     * Get ioVal
     *
     * @return integer
     */
    public function getIoVal()
    {
        return $this->ioVal;
    }

    /**
     * Set intsToSend
     *
     * @param integer $intsToSend
     * @return MessageI
     */
    public function setIntsToSend($intsToSend)
    {
        $this->intsToSend = $intsToSend;

        return $this;
    }

    /**
     * Get intsToSend
     *
     * @return integer
     */
    public function getIntsToSend()
    {
        return $this->intsToSend;
    }

    /**
     * Set intsElapsed
     *
     * @param integer $intsElapsed
     * @return MessageI
     */
    public function setIntsElapsed($intsElapsed)
    {
        $this->intsElapsed = $intsElapsed;

        return $this;
    }

    /**
     * Get intsElapsed
     *
     * @return integer
     */
    public function getIntsElapsed()
    {
        return $this->intsElapsed;
    }

    /**
     * Set intsTotal
     *
     * @param integer $intsTotal
     * @return MessageI
     */
    public function setIntsTotal($intsTotal)
    {
        $this->intsTotal = $intsTotal;

        return $this;
    }

    /**
     * Get intsTotal
     *
     * @return integer
     */
    public function getIntsTotal()
    {
        return $this->intsTotal;
    }
}
