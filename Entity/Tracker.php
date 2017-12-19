<?php

namespace CoffeeBike\OwasysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tracker
 */
class Tracker
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $imei;

    /**
     * @var string
     */
    private $phoneNo;

    /**
     * @var string
     */
    private $icc;

    /**
     * @var string
     */
    private $imsi;

    /**
     * @var boolean
     */
    private $alarm;

    /**
     * @var string
     */
    private $alarmPhoneNo = null;

    /**
     * @var boolean
     */
    private $sellingMode = 1;

    /**
     * @var \DateTime
     */
    private $sellingModeDate = 1;

    /**
     * @var string
     */
    private $latitude;

    /**
     * @var string
     */
    private $longitude;

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
     * Set imei
     *
     * @param string $imei
     * @return Tracker
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
     * Set phoneNo
     *
     * @param string $phoneNo
     * @return Tracker
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;

        return $this;
    }

    /**
     * Get phoneNo
     *
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }

    /**
     * Set icc
     *
     * @param string $icc
     * @return Tracker
     */
    public function setIcc($icc)
    {
        $this->icc = $icc;

        return $this;
    }

    /**
     * Get icc
     *
     * @return string
     */
    public function getIcc()
    {
        return $this->icc;
    }
    
    /**
     * Get last 5 elements of icc
     * 
     * @return string
     */
     public function getShortIcc()
     {
         return substr($this->icc, -5);
     }

    /**
     * Set imsi
     *
     * @param string $imsi
     * @return Tracker
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
     * Set alarm
     *
     * @param boolean $alarm
     * @return Tracker
     */
    public function setAlarm($alarm)
    {
        $this->alarm = $alarm;

        return $this;
    }

    /**
     * Get alarm
     *
     * @return boolean
     */
    public function getAlarm()
    {
        return $this->alarm;
    }

    /**
     * Set alarmPhoneNo
     *
     * @param string $alarmPhoneNo
     * @return Tracker
     */
    public function setAlarmPhoneNo($alarmPhoneNo)
    {
        $this->alarmPhoneNo = $alarmPhoneNo;

        return $this;
    }

    /**
     * Get alarmPhoneNo
     *
     * @return string
     */
    public function getAlarmPhoneNo()
    {
        return $this->alarmPhoneNo;
    }

    /**
     * Set sellingMode
     *
     * @param boolean $sellingMode
     * @return Tracker
     */
    public function setSellingMode($sellingMode)
    {
        $this->sellingMode = $sellingMode;

        return $this;
    }

    /**
     * Get sellingMode
     *
     * @return bool
     */
    public function getSellingMode()
    {
        return $this->sellingMode;
    }

    /**
     * Set sellingModeDate
     *
     * @param \DateTime $sellingModeDate
     * @return Tracker
     */
    public function setSellingModeDate(\DateTime $sellingModeDate)
    {
        $this->sellingModeDate = $sellingModeDate;

        return $this;
    }

    /**
     * Get sellingModeDate
     *
     * @return \DateTime
     */
    public function getSellingModeDate()
    {
        return $this->sellingModeDate;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return string
     */
    public function setLatitude()
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return string
     */
    public function setLongitude()
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

}
