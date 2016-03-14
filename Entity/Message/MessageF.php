<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageF
 */
class MessageF
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $externalVoltage;

    /**
     * @var float
     */
    private $internalVoltage;

    /**
     * @var boolean
     */
    private $movement;

    /**
     * @var float
     */
    private $positionAccuracy;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var integer
     */
    private $cellId;

    /**
     * @var integer
     */
    private $lac;

    /**
     * @var integer
     */
    private $plmn;

    /**
     * @var integer
     */
    private $rssi;

    /**
     * @var boolean
     */
    private $gpsCoverage;

    /**
     * @var integer
     */
    private $traveledKms;

    /**
     * @var float
     */
    private $gpsSpeed;

    /**
     * @var integer
     */
    private $lastValidPositionTimestamp;

    /**
     * @var boolean
     */
    private $outsideGeofenceFlag;

    /**
     * @var float
     */
    private $courseOverGround;


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
     * Set externalVoltage
     *
     * @param float $externalVoltage
     * @return MessageD
     */
    public function setExternalVoltage($externalVoltage)
    {
        $this->externalVoltage = $externalVoltage;

        return $this;
    }

    /**
     * Get externalVoltage
     *
     * @return float
     */
    public function getExternalVoltage()
    {
        return $this->externalVoltage;
    }

    /**
     * Set internalVoltage
     *
     * @param float $internalVoltage
     * @return MessageD
     */
    public function setInternalVoltage($internalVoltage)
    {
        $this->internalVoltage = $internalVoltage;

        return $this;
    }

    /**
     * Get internalVoltage
     *
     * @return float
     */
    public function getInternalVoltage()
    {
        return $this->internalVoltage;
    }

    /**
     * Set movement
     *
     * @param boolean $movement
     * @return MessageD
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

    /**
     * Set positionAccuracy
     *
     * @param float $positionAccuracy
     * @return MessageD
     */
    public function setPositionAccuracy($positionAccuracy)
    {
        $this->positionAccuracy = $positionAccuracy;

        return $this;
    }

    /**
     * Get positionAccuracy
     *
     * @return float
     */
    public function getPositionAccuracy()
    {
        return $this->positionAccuracy;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return MessageD
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return MessageD
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set cellId
     *
     * @param integer $cellId
     * @return MessageD
     */
    public function setCellId($cellId)
    {
        $this->cellId = $cellId;

        return $this;
    }

    /**
     * Get cellId
     *
     * @return integer
     */
    public function getCellId()
    {
        return $this->cellId;
    }

    /**
     * Set lac
     *
     * @param integer $lac
     * @return MessageD
     */
    public function setLac($lac)
    {
        $this->lac = $lac;

        return $this;
    }

    /**
     * Get lac
     *
     * @return integer
     */
    public function getLac()
    {
        return $this->lac;
    }

    /**
     * Set plmn
     *
     * @param integer $plmn
     * @return MessageD
     */
    public function setPlmn($plmn)
    {
        $this->plmn = $plmn;

        return $this;
    }

    /**
     * Get plmn
     *
     * @return integer
     */
    public function getPlmn()
    {
        return $this->plmn;
    }

    /**
     * Set rssi
     *
     * @param integer $rssi
     * @return MessageD
     */
    public function setRssi($rssi)
    {
        $this->rssi = $rssi;

        return $this;
    }

    /**
     * Get rssi
     *
     * @return integer
     */
    public function getRssi()
    {
        return $this->rssi;
    }

    /**
     * Set gpsCoverage
     *
     * @param boolean $gpsCoverage
     * @return MessageD
     */
    public function setGpsCoverage($gpsCoverage)
    {
        $this->gpsCoverage = $gpsCoverage;

        return $this;
    }

    /**
     * Get gpsCoverage
     *
     * @return boolean
     */
    public function getGpsCoverage()
    {
        return $this->gpsCoverage;
    }

    /**
     * Set traveledKms
     *
     * @param integer $traveledKms
     * @return MessageD
     */
    public function setTraveledKms($traveledKms)
    {
        $this->traveledKms = $traveledKms;

        return $this;
    }

    /**
     * Get traveledKms
     *
     * @return integer
     */
    public function getTraveledKms()
    {
        return $this->traveledKms;
    }

    /**
     * Set gpsSpeed
     *
     * @param float $gpsSpeed
     * @return MessageD
     */
    public function setGpsSpeed($gpsSpeed)
    {
        $this->gpsSpeed = $gpsSpeed;

        return $this;
    }

    /**
     * Get gpsSpeed
     *
     * @return float
     */
    public function getGpsSpeed()
    {
        return $this->gpsSpeed;
    }

    /**
     * Set lastValidPositionTimestamp
     *
     * @param integer $lastValidPositionTimestamp
     * @return MessageD
     */
    public function setLastValidPositionTimestamp($lastValidPositionTimestamp)
    {
        $this->lastValidPositionTimestamp = $lastValidPositionTimestamp;

        return $this;
    }

    /**
     * Get lastValidPositionTimestamp
     *
     * @return integer
     */
    public function getLastValidPositionTimestamp()
    {
        return $this->lastValidPositionTimestamp;
    }

    /**
     * Set outsideGeofenceFlag
     *
     * @param boolean $outsideGeofenceFlag
     * @return MessageD
     */
    public function setOutsideGeofenceFlag($outsideGeofenceFlag)
    {
        $this->outsideGeofenceFlag = $outsideGeofenceFlag;

        return $this;
    }

    /**
     * Get outsideGeofenceFlag
     *
     * @return boolean
     */
    public function getOutsideGeofenceFlag()
    {
        return $this->outsideGeofenceFlag;
    }

    /**
     * Set courseOverGround
     *
     * @param float $courseOverGround
     * @return MessageD
     */
    public function setCourseOverGround($courseOverGround)
    {
        $this->courseOverGround = $courseOverGround;

        return $this;
    }

    /**
     * Get courseOverGround
     *
     * @return float
     */
    public function getCourseOverGround()
    {
        return $this->courseOverGround;
    }
}
