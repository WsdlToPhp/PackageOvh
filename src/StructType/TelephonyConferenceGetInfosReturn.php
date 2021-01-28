<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyConferenceGetInfosReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyConferenceGetInfosReturn extends AbstractStructBase
{
    /**
     * The parties
     * @var int
     */
    public $parties;
    /**
     * The locked
     * @var bool
     */
    public $locked;
    /**
     * The participants
     * @var \Ovh\ArrayType\MyArrayOfTelephonyConferenceParticipantStructType
     */
    public $participants;
    /**
     * Constructor method for telephonyConferenceGetInfosReturn
     * @uses TelephonyConferenceGetInfosReturn::setParties()
     * @uses TelephonyConferenceGetInfosReturn::setLocked()
     * @uses TelephonyConferenceGetInfosReturn::setParticipants()
     * @param int $parties
     * @param bool $locked
     * @param \Ovh\ArrayType\MyArrayOfTelephonyConferenceParticipantStructType $participants
     */
    public function __construct($parties = null, $locked = null, \Ovh\ArrayType\MyArrayOfTelephonyConferenceParticipantStructType $participants = null)
    {
        $this
            ->setParties($parties)
            ->setLocked($locked)
            ->setParticipants($participants);
    }
    /**
     * Get parties value
     * @return int|null
     */
    public function getParties()
    {
        return $this->parties;
    }
    /**
     * Set parties value
     * @param int $parties
     * @return \Ovh\StructType\TelephonyConferenceGetInfosReturn
     */
    public function setParties($parties = null)
    {
        // validation for constraint: int
        if (!is_null($parties) && !(is_int($parties) || ctype_digit($parties))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parties, true), gettype($parties)), __LINE__);
        }
        $this->parties = $parties;
        return $this;
    }
    /**
     * Get locked value
     * @return bool|null
     */
    public function getLocked()
    {
        return $this->locked;
    }
    /**
     * Set locked value
     * @param bool $locked
     * @return \Ovh\StructType\TelephonyConferenceGetInfosReturn
     */
    public function setLocked($locked = null)
    {
        // validation for constraint: boolean
        if (!is_null($locked) && !is_bool($locked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), gettype($locked)), __LINE__);
        }
        $this->locked = $locked;
        return $this;
    }
    /**
     * Get participants value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyConferenceParticipantStructType|null
     */
    public function getParticipants()
    {
        return $this->participants;
    }
    /**
     * Set participants value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyConferenceParticipantStructType $participants
     * @return \Ovh\StructType\TelephonyConferenceGetInfosReturn
     */
    public function setParticipants(\Ovh\ArrayType\MyArrayOfTelephonyConferenceParticipantStructType $participants = null)
    {
        $this->participants = $participants;
        return $this;
    }
}
