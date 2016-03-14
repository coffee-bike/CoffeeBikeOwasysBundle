<?php

namespace CoffeeBike\OwasysBundle\Entity\Message;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageC
 */
class MessageC
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $code;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $newKmSet;

    /**
     * @var integer
     */
    private $sleepTime;

    /**
     * @var integer
     */
    private $timeToSleep;

    /**
     * @var integer
     */
    private $timeToMove;

    /**
     * @var integer
     */
    private $timeToStop;

    /**
     * @var boolean
     */
    private $movEvent;

    /**
     * @var boolean
     */
    private $kmEvent;

    /**
     * @var integer
     */
    private $dataOffTime;

    /**
     * @var integer
     */
    private $kmAlert;

    /**
     * @var integer
     */
    private $lpCycles;

    /**
     * @var boolean
     */
    private $extraInfo;

    /**
     * @var integer
     */
    private $moveStop;

    /**
     * @var integer
     */
    private $moveSense;

    /**
     * @var integer
     */
    private $moveTime;

    /**
     * @var string
     */
    private $authorizedPhone;

    /**
     * @var boolean
     */
    private $sms;

    /**
     * @var integer
     */
    private $bumpTreshold;

    /**
     * @var integer
     */
    private $wakeUpMask;

    /**
     * @var integer
     */
    private $posToTx;

    /**
     * @var integer
     */
    private $timeToSendPos;

    /**
     * @var boolean
     */
    private $dataOff;

    /**
     * @var string
     */
    private $currentPlmn;

    /**
     * @var string
     */
    private $currentApnUser;

    /**
     * @var string
     */
    private $currentApnPassword;

    /**
     * @var string
     */
    private $currentApn;

    /**
     * @var string
     */
    private $dns1;

    /**
     * @var string
     */
    private $dns2;

    /**
     * @var string
     */
    private $imsi;

    /**
     * @var string
     */
    private $brokerIp;

    /**
     * @var integer
     */
    private $port;

    /**
     * @var integer
     */
    private $mqttKeepAlive;

    /**
     * @var string
     */
    private $mqttUser;

    /**
     * @var string
     */
    private $mqttPwd;

    /**
     * @var string
     */
    private $mqttPubPrefix;

    /**
     * @var string
     */
    private $mqttSubPrefix;

    /**
     * @var boolean
     */
    private $cleanSession;

    /**
     * @var integer
     */
    private $speedTreshold;

    /**
     * @var integer
     */
    private $geofenceRadius;

    /**
     * @var float
     */
    private $geofenceLat;

    /**
     * @var integer
     */
    private $hwType;

    /**
     * @var integer
     */
    private $owSampleRate;

    /**
     * @var integer
     */
    private $owCalcRate;

    /**
     * @var integer
     */
    private $owMask;

    /**
     * @var integer
     */
    private $noConnSucc;

    /**
     * @var integer
     */
    private $noConnFail;


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
     * Set code
     *
     * @param integer $code
     * @return MessageC
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return MessageC
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set newKmSet
     *
     * @param integer $newKmSet
     * @return MessageC
     */
    public function setNewKmSet($newKmSet)
    {
        $this->newKmSet = $newKmSet;

        return $this;
    }

    /**
     * Get newKmSet
     *
     * @return integer 
     */
    public function getNewKmSet()
    {
        return $this->newKmSet;
    }

    /**
     * Set sleepTime
     *
     * @param integer $sleepTime
     * @return MessageC
     */
    public function setSleepTime($sleepTime)
    {
        $this->sleepTime = $sleepTime;

        return $this;
    }

    /**
     * Get sleepTime
     *
     * @return integer 
     */
    public function getSleepTime()
    {
        return $this->sleepTime;
    }

    /**
     * Set timeToSleep
     *
     * @param integer $timeToSleep
     * @return MessageC
     */
    public function setTimeToSleep($timeToSleep)
    {
        $this->timeToSleep = $timeToSleep;

        return $this;
    }

    /**
     * Get timeToSleep
     *
     * @return integer 
     */
    public function getTimeToSleep()
    {
        return $this->timeToSleep;
    }

    /**
     * Set timeToMove
     *
     * @param integer $timeToMove
     * @return MessageC
     */
    public function setTimeToMove($timeToMove)
    {
        $this->timeToMove = $timeToMove;

        return $this;
    }

    /**
     * Get timeToMove
     *
     * @return integer 
     */
    public function getTimeToMove()
    {
        return $this->timeToMove;
    }

    /**
     * Set timeToStop
     *
     * @param integer $timeToStop
     * @return MessageC
     */
    public function setTimeToStop($timeToStop)
    {
        $this->timeToStop = $timeToStop;

        return $this;
    }

    /**
     * Get timeToStop
     *
     * @return integer 
     */
    public function getTimeToStop()
    {
        return $this->timeToStop;
    }

    /**
     * Set movEvent
     *
     * @param boolean $movEvent
     * @return MessageC
     */
    public function setMovEvent($movEvent)
    {
        $this->movEvent = $movEvent;

        return $this;
    }

    /**
     * Get movEvent
     *
     * @return boolean 
     */
    public function getMovEvent()
    {
        return $this->movEvent;
    }

    /**
     * Set kmEvent
     *
     * @param boolean $kmEvent
     * @return MessageC
     */
    public function setKmEvent($kmEvent)
    {
        $this->kmEvent = $kmEvent;

        return $this;
    }

    /**
     * Get kmEvent
     *
     * @return boolean 
     */
    public function getKmEvent()
    {
        return $this->kmEvent;
    }

    /**
     * Set dataOffTime
     *
     * @param integer $dataOffTime
     * @return MessageC
     */
    public function setDataOffTime($dataOffTime)
    {
        $this->dataOffTime = $dataOffTime;

        return $this;
    }

    /**
     * Get dataOffTime
     *
     * @return integer 
     */
    public function getDataOffTime()
    {
        return $this->dataOffTime;
    }

    /**
     * Set kmAlert
     *
     * @param integer $kmAlert
     * @return MessageC
     */
    public function setKmAlert($kmAlert)
    {
        $this->kmAlert = $kmAlert;

        return $this;
    }

    /**
     * Get kmAlert
     *
     * @return integer 
     */
    public function getKmAlert()
    {
        return $this->kmAlert;
    }

    /**
     * Set lpCycles
     *
     * @param integer $lpCycles
     * @return MessageC
     */
    public function setLpCycles($lpCycles)
    {
        $this->lpCycles = $lpCycles;

        return $this;
    }

    /**
     * Get lpCycles
     *
     * @return integer 
     */
    public function getLpCycles()
    {
        return $this->lpCycles;
    }

    /**
     * Set extraInfo
     *
     * @param boolean $extraInfo
     * @return MessageC
     */
    public function setExtraInfo($extraInfo)
    {
        $this->extraInfo = $extraInfo;

        return $this;
    }

    /**
     * Get extraInfo
     *
     * @return boolean 
     */
    public function getExtraInfo()
    {
        return $this->extraInfo;
    }

    /**
     * Set moveStop
     *
     * @param integer $moveStop
     * @return MessageC
     */
    public function setMoveStop($moveStop)
    {
        $this->moveStop = $moveStop;

        return $this;
    }

    /**
     * Get moveStop
     *
     * @return integer 
     */
    public function getMoveStop()
    {
        return $this->moveStop;
    }

    /**
     * Set moveSense
     *
     * @param integer $moveSense
     * @return MessageC
     */
    public function setMoveSense($moveSense)
    {
        $this->moveSense = $moveSense;

        return $this;
    }

    /**
     * Get moveSense
     *
     * @return integer 
     */
    public function getMoveSense()
    {
        return $this->moveSense;
    }

    /**
     * Set moveTime
     *
     * @param integer $moveTime
     * @return MessageC
     */
    public function setMoveTime($moveTime)
    {
        $this->moveTime = $moveTime;

        return $this;
    }

    /**
     * Get moveTime
     *
     * @return integer 
     */
    public function getMoveTime()
    {
        return $this->moveTime;
    }

    /**
     * Set authorizedPhone
     *
     * @param string $authorizedPhone
     * @return MessageC
     */
    public function setAuthorizedPhone($authorizedPhone)
    {
        $this->authorizedPhone = $authorizedPhone;

        return $this;
    }

    /**
     * Get authorizedPhone
     *
     * @return string 
     */
    public function getAuthorizedPhone()
    {
        return $this->authorizedPhone;
    }

    /**
     * Set sms
     *
     * @param boolean $sms
     * @return MessageC
     */
    public function setSms($sms)
    {
        $this->sms = $sms;

        return $this;
    }

    /**
     * Get sms
     *
     * @return boolean 
     */
    public function getSms()
    {
        return $this->sms;
    }

    /**
     * Set bumpTreshold
     *
     * @param integer $bumpTreshold
     * @return MessageC
     */
    public function setBumpTreshold($bumpTreshold)
    {
        $this->bumpTreshold = $bumpTreshold;

        return $this;
    }

    /**
     * Get bumpTreshold
     *
     * @return integer 
     */
    public function getBumpTreshold()
    {
        return $this->bumpTreshold;
    }

    /**
     * Set wakeUpMask
     *
     * @param integer $wakeUpMask
     * @return MessageC
     */
    public function setWakeUpMask($wakeUpMask)
    {
        $this->wakeUpMask = $wakeUpMask;

        return $this;
    }

    /**
     * Get wakeUpMask
     *
     * @return integer 
     */
    public function getWakeUpMask()
    {
        return $this->wakeUpMask;
    }

    /**
     * Set posToTx
     *
     * @param integer $posToTx
     * @return MessageC
     */
    public function setPosToTx($posToTx)
    {
        $this->posToTx = $posToTx;

        return $this;
    }

    /**
     * Get posToTx
     *
     * @return integer 
     */
    public function getPosToTx()
    {
        return $this->posToTx;
    }

    /**
     * Set timeToSendPos
     *
     * @param integer $timeToSendPos
     * @return MessageC
     */
    public function setTimeToSendPos($timeToSendPos)
    {
        $this->timeToSendPos = $timeToSendPos;

        return $this;
    }

    /**
     * Get timeToSendPos
     *
     * @return integer 
     */
    public function getTimeToSendPos()
    {
        return $this->timeToSendPos;
    }

    /**
     * Set dataOff
     *
     * @param boolean $dataOff
     * @return MessageC
     */
    public function setDataOff($dataOff)
    {
        $this->dataOff = $dataOff;

        return $this;
    }

    /**
     * Get dataOff
     *
     * @return boolean 
     */
    public function getDataOff()
    {
        return $this->dataOff;
    }

    /**
     * Set currentPlmn
     *
     * @param string $currentPlmn
     * @return MessageC
     */
    public function setCurrentPlmn($currentPlmn)
    {
        $this->currentPlmn = $currentPlmn;

        return $this;
    }

    /**
     * Get currentPlmn
     *
     * @return string 
     */
    public function getCurrentPlmn()
    {
        return $this->currentPlmn;
    }

    /**
     * Set currentApnUser
     *
     * @param string $currentApnUser
     * @return MessageC
     */
    public function setCurrentApnUser($currentApnUser)
    {
        $this->currentApnUser = $currentApnUser;

        return $this;
    }

    /**
     * Get currentApnUser
     *
     * @return string 
     */
    public function getCurrentApnUser()
    {
        return $this->currentApnUser;
    }

    /**
     * Set currentApnPassword
     *
     * @param string $currentApnPassword
     * @return MessageC
     */
    public function setCurrentApnPassword($currentApnPassword)
    {
        $this->currentApnPassword = $currentApnPassword;

        return $this;
    }

    /**
     * Get currentApnPassword
     *
     * @return string 
     */
    public function getCurrentApnPassword()
    {
        return $this->currentApnPassword;
    }

    /**
     * Set currentApn
     *
     * @param string $currentApn
     * @return MessageC
     */
    public function setCurrentApn($currentApn)
    {
        $this->currentApn = $currentApn;

        return $this;
    }

    /**
     * Get currentApn
     *
     * @return string 
     */
    public function getCurrentApn()
    {
        return $this->currentApn;
    }

    /**
     * Set dns1
     *
     * @param string $dns1
     * @return MessageC
     */
    public function setDns1($dns1)
    {
        $this->dns1 = $dns1;

        return $this;
    }

    /**
     * Get dns1
     *
     * @return string 
     */
    public function getDns1()
    {
        return $this->dns1;
    }

    /**
     * Set dns2
     *
     * @param string $dns2
     * @return MessageC
     */
    public function setDns2($dns2)
    {
        $this->dns2 = $dns2;

        return $this;
    }

    /**
     * Get dns2
     *
     * @return string 
     */
    public function getDns2()
    {
        return $this->dns2;
    }

    /**
     * Set imsi
     *
     * @param string $imsi
     * @return MessageC
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
     * Set brokerIp
     *
     * @param string $brokerIp
     * @return MessageC
     */
    public function setBrokerIp($brokerIp)
    {
        $this->brokerIp = $brokerIp;

        return $this;
    }

    /**
     * Get brokerIp
     *
     * @return string 
     */
    public function getBrokerIp()
    {
        return $this->brokerIp;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return MessageC
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set mqttKeepAlive
     *
     * @param integer $mqttKeepAlive
     * @return MessageC
     */
    public function setMqttKeepAlive($mqttKeepAlive)
    {
        $this->mqttKeepAlive = $mqttKeepAlive;

        return $this;
    }

    /**
     * Get mqttKeepAlive
     *
     * @return integer 
     */
    public function getMqttKeepAlive()
    {
        return $this->mqttKeepAlive;
    }

    /**
     * Set mqttUser
     *
     * @param string $mqttUser
     * @return MessageC
     */
    public function setMqttUser($mqttUser)
    {
        $this->mqttUser = $mqttUser;

        return $this;
    }

    /**
     * Get mqttUser
     *
     * @return string 
     */
    public function getMqttUser()
    {
        return $this->mqttUser;
    }

    /**
     * Set mqttPwd
     *
     * @param string $mqttPwd
     * @return MessageC
     */
    public function setMqttPwd($mqttPwd)
    {
        $this->mqttPwd = $mqttPwd;

        return $this;
    }

    /**
     * Get mqttPwd
     *
     * @return string 
     */
    public function getMqttPwd()
    {
        return $this->mqttPwd;
    }

    /**
     * Set mqttPubPrefix
     *
     * @param string $mqttPubPrefix
     * @return MessageC
     */
    public function setMqttPubPrefix($mqttPubPrefix)
    {
        $this->mqttPubPrefix = $mqttPubPrefix;

        return $this;
    }

    /**
     * Get mqttPubPrefix
     *
     * @return string 
     */
    public function getMqttPubPrefix()
    {
        return $this->mqttPubPrefix;
    }

    /**
     * Set mqttSubPrefix
     *
     * @param string $mqttSubPrefix
     * @return MessageC
     */
    public function setMqttSubPrefix($mqttSubPrefix)
    {
        $this->mqttSubPrefix = $mqttSubPrefix;

        return $this;
    }

    /**
     * Get mqttSubPrefix
     *
     * @return string 
     */
    public function getMqttSubPrefix()
    {
        return $this->mqttSubPrefix;
    }

    /**
     * Set cleanSession
     *
     * @param boolean $cleanSession
     * @return MessageC
     */
    public function setCleanSession($cleanSession)
    {
        $this->cleanSession = $cleanSession;

        return $this;
    }

    /**
     * Get cleanSession
     *
     * @return boolean 
     */
    public function getCleanSession()
    {
        return $this->cleanSession;
    }

    /**
     * Set speedTreshold
     *
     * @param integer $speedTreshold
     * @return MessageC
     */
    public function setSpeedTreshold($speedTreshold)
    {
        $this->speedTreshold = $speedTreshold;

        return $this;
    }

    /**
     * Get speedTreshold
     *
     * @return integer 
     */
    public function getSpeedTreshold()
    {
        return $this->speedTreshold;
    }

    /**
     * Set geofenceRadius
     *
     * @param integer $geofenceRadius
     * @return MessageC
     */
    public function setGeofenceRadius($geofenceRadius)
    {
        $this->geofenceRadius = $geofenceRadius;

        return $this;
    }

    /**
     * Get geofenceRadius
     *
     * @return integer 
     */
    public function getGeofenceRadius()
    {
        return $this->geofenceRadius;
    }

    /**
     * Set geofenceLat
     *
     * @param float $geofenceLat
     * @return MessageC
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
     * Set hwType
     *
     * @param integer $hwType
     * @return MessageC
     */
    public function setHwType($hwType)
    {
        $this->hwType = $hwType;

        return $this;
    }

    /**
     * Get hwType
     *
     * @return integer 
     */
    public function getHwType()
    {
        return $this->hwType;
    }

    /**
     * Set owSampleRate
     *
     * @param integer $owSampleRate
     * @return MessageC
     */
    public function setOwSampleRate($owSampleRate)
    {
        $this->owSampleRate = $owSampleRate;

        return $this;
    }

    /**
     * Get owSampleRate
     *
     * @return integer 
     */
    public function getOwSampleRate()
    {
        return $this->owSampleRate;
    }

    /**
     * Set owCalcRate
     *
     * @param integer $owCalcRate
     * @return MessageC
     */
    public function setOwCalcRate($owCalcRate)
    {
        $this->owCalcRate = $owCalcRate;

        return $this;
    }

    /**
     * Get owCalcRate
     *
     * @return integer 
     */
    public function getOwCalcRate()
    {
        return $this->owCalcRate;
    }

    /**
     * Set owMask
     *
     * @param integer $owMask
     * @return MessageC
     */
    public function setOwMask($owMask)
    {
        $this->owMask = $owMask;

        return $this;
    }

    /**
     * Get owMask
     *
     * @return integer 
     */
    public function getOwMask()
    {
        return $this->owMask;
    }

    /**
     * Set noConnSucc
     *
     * @param integer $noConnSucc
     * @return MessageC
     */
    public function setNoConnSucc($noConnSucc)
    {
        $this->noConnSucc = $noConnSucc;

        return $this;
    }

    /**
     * Get noConnSucc
     *
     * @return integer 
     */
    public function getNoConnSucc()
    {
        return $this->noConnSucc;
    }

    /**
     * Set noConnFail
     *
     * @param integer $noConnFail
     * @return MessageC
     */
    public function setNoConnFail($noConnFail)
    {
        $this->noConnFail = $noConnFail;

        return $this;
    }

    /**
     * Get noConnFail
     *
     * @return integer 
     */
    public function getNoConnFail()
    {
        return $this->noConnFail;
    }
}
