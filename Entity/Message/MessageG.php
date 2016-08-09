<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use CoffeeBike\OwasysBundle\Entity\AbstractMessage;
use Doctrine\ORM\Mapping as ORM;

/**
 * MessageG
 */
class MessageG extends AbstractMessage
{
    /**
     * @var boolean
     */
    private $outOfGeofence;

    /**
     * @var float
     */
    private $geofenceLat;

    /**
     * @var float
     */
    private $geofenceLon;

    /**
     * @var float
     */
    private $currentLat;

    /**
     * @var float
     */
    private $currentLon;


    /**
     * Set outOfGeofence
     *
     * @param boolean $outOfGeofence
     * @return MessageG
     */
    public function setOutOfGeofence($outOfGeofence)
    {
        $this->outOfGeofence = $outOfGeofence;

        return $this;
    }

    /**
     * Get outOfGeofence
     *
     * @return boolean
     */
    public function getOutOfGeofence()
    {
        return $this->outOfGeofence;
    }

    /**
     * Set geofenceLat
     *
     * @param float $geofenceLat
     * @return MessageG
     */
    public function setGeofenceLat($geofenceLat)
    {
        $this->geofenceLat = $geofenceLat;

        return $this;
    }

    /**
     * Get geofenceLat
     *
     * @return float
     */
    public function getGeofenceLat()
    {
        return $this->geofenceLat;
    }

    /**
     * Set geofenceLon
     *
     * @param float $geofenceLon
     * @return MessageG
     */
    public function setGeofenceLon($geofenceLon)
    {
        $this->geofenceLon = $geofenceLon;

        return $this;
    }

    /**
     * Get geofenceLon
     *
     * @return float
     */
    public function getGeofenceLon()
    {
        return $this->geofenceLon;
    }

    /**
     * Set currentLat
     *
     * @param float $currentLat
     * @return MessageG
     */
    public function setCurrentLat($currentLat)
    {
        $this->currentLat = $currentLat;

        return $this;
    }

    /**
     * Get currentLat
     *
     * @return float
     */
    public function getCurrentLat()
    {
        return $this->currentLat;
    }

    /**
     * Set currentLon
     *
     * @param float $currentLon
     * @return MessageG
     */
    public function setCurrentLon($currentLon)
    {
        $this->currentLon = $currentLon;

        return $this;
    }

    /**
     * Get currentLon
     *
     * @return float
     */
    public function getCurrentLon()
    {
        return $this->currentLon;
    }
}
