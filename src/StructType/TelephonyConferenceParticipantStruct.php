<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyConferenceParticipantStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyConferenceParticipantStruct extends AbstractStructBase
{
    /**
     * The callerid
     * @var string
     */
    public $callerid;
    /**
     * The callername
     * @var string
     */
    public $callername;
    /**
     * The talking
     * @var bool
     */
    public $talking;
    /**
     * The deaf
     * @var bool
     */
    public $deaf;
    /**
     * The muted
     * @var bool
     */
    public $muted;
    /**
     * The joinsince
     * @var int
     */
    public $joinsince;
    /**
     * The memberid
     * @var int
     */
    public $memberid;
    /**
     * The energy
     * @var int
     */
    public $energy;
    /**
     * Constructor method for telephonyConferenceParticipantStruct
     * @uses TelephonyConferenceParticipantStruct::setCallerid()
     * @uses TelephonyConferenceParticipantStruct::setCallername()
     * @uses TelephonyConferenceParticipantStruct::setTalking()
     * @uses TelephonyConferenceParticipantStruct::setDeaf()
     * @uses TelephonyConferenceParticipantStruct::setMuted()
     * @uses TelephonyConferenceParticipantStruct::setJoinsince()
     * @uses TelephonyConferenceParticipantStruct::setMemberid()
     * @uses TelephonyConferenceParticipantStruct::setEnergy()
     * @param string $callerid
     * @param string $callername
     * @param bool $talking
     * @param bool $deaf
     * @param bool $muted
     * @param int $joinsince
     * @param int $memberid
     * @param int $energy
     */
    public function __construct($callerid = null, $callername = null, $talking = null, $deaf = null, $muted = null, $joinsince = null, $memberid = null, $energy = null)
    {
        $this
            ->setCallerid($callerid)
            ->setCallername($callername)
            ->setTalking($talking)
            ->setDeaf($deaf)
            ->setMuted($muted)
            ->setJoinsince($joinsince)
            ->setMemberid($memberid)
            ->setEnergy($energy);
    }
    /**
     * Get callerid value
     * @return string|null
     */
    public function getCallerid()
    {
        return $this->callerid;
    }
    /**
     * Set callerid value
     * @param string $callerid
     * @return \Ovh\StructType\TelephonyConferenceParticipantStruct
     */
    public function setCallerid($callerid = null)
    {
        // validation for constraint: string
        if (!is_null($callerid) && !is_string($callerid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callerid, true), gettype($callerid)), __LINE__);
        }
        $this->callerid = $callerid;
        return $this;
    }
    /**
     * Get callername value
     * @return string|null
     */
    public function getCallername()
    {
        return $this->callername;
    }
    /**
     * Set callername value
     * @param string $callername
     * @return \Ovh\StructType\TelephonyConferenceParticipantStruct
     */
    public function setCallername($callername = null)
    {
        // validation for constraint: string
        if (!is_null($callername) && !is_string($callername)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callername, true), gettype($callername)), __LINE__);
        }
        $this->callername = $callername;
        return $this;
    }
    /**
     * Get talking value
     * @return bool|null
     */
    public function getTalking()
    {
        return $this->talking;
    }
    /**
     * Set talking value
     * @param bool $talking
     * @return \Ovh\StructType\TelephonyConferenceParticipantStruct
     */
    public function setTalking($talking = null)
    {
        // validation for constraint: boolean
        if (!is_null($talking) && !is_bool($talking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($talking, true), gettype($talking)), __LINE__);
        }
        $this->talking = $talking;
        return $this;
    }
    /**
     * Get deaf value
     * @return bool|null
     */
    public function getDeaf()
    {
        return $this->deaf;
    }
    /**
     * Set deaf value
     * @param bool $deaf
     * @return \Ovh\StructType\TelephonyConferenceParticipantStruct
     */
    public function setDeaf($deaf = null)
    {
        // validation for constraint: boolean
        if (!is_null($deaf) && !is_bool($deaf)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deaf, true), gettype($deaf)), __LINE__);
        }
        $this->deaf = $deaf;
        return $this;
    }
    /**
     * Get muted value
     * @return bool|null
     */
    public function getMuted()
    {
        return $this->muted;
    }
    /**
     * Set muted value
     * @param bool $muted
     * @return \Ovh\StructType\TelephonyConferenceParticipantStruct
     */
    public function setMuted($muted = null)
    {
        // validation for constraint: boolean
        if (!is_null($muted) && !is_bool($muted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($muted, true), gettype($muted)), __LINE__);
        }
        $this->muted = $muted;
        return $this;
    }
    /**
     * Get joinsince value
     * @return int|null
     */
    public function getJoinsince()
    {
        return $this->joinsince;
    }
    /**
     * Set joinsince value
     * @param int $joinsince
     * @return \Ovh\StructType\TelephonyConferenceParticipantStruct
     */
    public function setJoinsince($joinsince = null)
    {
        // validation for constraint: int
        if (!is_null($joinsince) && !(is_int($joinsince) || ctype_digit($joinsince))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($joinsince, true), gettype($joinsince)), __LINE__);
        }
        $this->joinsince = $joinsince;
        return $this;
    }
    /**
     * Get memberid value
     * @return int|null
     */
    public function getMemberid()
    {
        return $this->memberid;
    }
    /**
     * Set memberid value
     * @param int $memberid
     * @return \Ovh\StructType\TelephonyConferenceParticipantStruct
     */
    public function setMemberid($memberid = null)
    {
        // validation for constraint: int
        if (!is_null($memberid) && !(is_int($memberid) || ctype_digit($memberid))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($memberid, true), gettype($memberid)), __LINE__);
        }
        $this->memberid = $memberid;
        return $this;
    }
    /**
     * Get energy value
     * @return int|null
     */
    public function getEnergy()
    {
        return $this->energy;
    }
    /**
     * Set energy value
     * @param int $energy
     * @return \Ovh\StructType\TelephonyConferenceParticipantStruct
     */
    public function setEnergy($energy = null)
    {
        // validation for constraint: int
        if (!is_null($energy) && !(is_int($energy) || ctype_digit($energy))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($energy, true), gettype($energy)), __LINE__);
        }
        $this->energy = $energy;
        return $this;
    }
}
