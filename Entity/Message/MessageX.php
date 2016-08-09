<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use CoffeeBike\OwasysBundle\Entity\AbstractMessage;
use Doctrine\ORM\Mapping as ORM;

/**
 * MessageX
 */
class MessageX extends AbstractMessage
{
    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $imei;

    /**
     * @var string
     */
    private $imsi;

    /**
     * @var string
     */
    private $bootloader;


    /**
     * Set version
     *
     * @param string $version
     * @return MessageX
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set imei
     *
     * @param string $imei
     * @return MessageX
     */
    public function setImei($imei)
    {
        $this->imei = $imei;

        return $this;
    }

    /**
     * Get imei
     *
     * @return string
     */
    public function getImei()
    {
        return $this->imei;
    }

    /**
     * Set imsi
     *
     * @param string $imsi
     * @return MessageX
     */
    public function setImsi($imsi)
    {
        $this->imsi = $imsi;

        return $this;
    }

    /**
     * Get imsi
     *
     * @return string
     */
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * Set bootloader
     *
     * @param string $bootloader
     * @return MessageX
     */
    public function setBootloader($bootloader)
    {
        $this->bootloader = $bootloader;

        return $this;
    }

    /**
     * Get bootloader
     *
     * @return string
     */
    public function getBootloader()
    {
        return $this->bootloader;
    }
}
