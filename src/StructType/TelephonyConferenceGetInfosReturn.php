<?php

namespace PayPal\StructType;

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
     * @var \PayPal\ArrayType\MyArrayOfTelephonyConferenceParticipantStructType
     */
    public $participants;
    /**
     * Constructor method for telephonyConferenceGetInfosReturn
     * @uses TelephonyConferenceGetInfosReturn::setParties()
     * @uses TelephonyConferenceGetInfosReturn::setLocked()
     * @uses TelephonyConferenceGetInfosReturn::setParticipants()
     * @param int $parties
     * @param bool $locked
     * @param \PayPal\ArrayType\MyArrayOfTelephonyConferenceParticipantStructType $participants
     */
    public function __construct($parties = null, $locked = null, \PayPal\ArrayType\MyArrayOfTelephonyConferenceParticipantStructType $participants = null)
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
     * @return \PayPal\StructType\TelephonyConferenceGetInfosReturn
     */
    public function setParties($parties = null)
    {
        // validation for constraint: int
        if (!is_null($parties) && !is_numeric($parties)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($parties)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyConferenceGetInfosReturn
     */
    public function setLocked($locked = null)
    {
        // validation for constraint: boolean
        if (!is_null($locked) && !is_bool($locked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($locked)), __LINE__);
        }
        $this->locked = $locked;
        return $this;
    }
    /**
     * Get participants value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyConferenceParticipantStructType|null
     */
    public function getParticipants()
    {
        return $this->participants;
    }
    /**
     * Set participants value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyConferenceParticipantStructType $participants
     * @return \PayPal\StructType\TelephonyConferenceGetInfosReturn
     */
    public function setParticipants(\PayPal\ArrayType\MyArrayOfTelephonyConferenceParticipantStructType $participants = null)
    {
        $this->participants = $participants;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyConferenceGetInfosReturn
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
