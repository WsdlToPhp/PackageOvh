<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingGenericScreenStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingGenericScreenStruct extends AbstractStructBase
{
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The timeEnd
     * @var string
     */
    public $timeEnd;
    /**
     * The timeStart
     * @var string
     */
    public $timeStart;
    /**
     * The dayType
     * @var string
     */
    public $dayType;
    /**
     * The forwardPolicyIndex
     * @var string
     */
    public $forwardPolicyIndex;
    /**
     * Constructor method for telephonyHuntingGenericScreenStruct
     * @uses TelephonyHuntingGenericScreenStruct::setStatus()
     * @uses TelephonyHuntingGenericScreenStruct::setTimeEnd()
     * @uses TelephonyHuntingGenericScreenStruct::setTimeStart()
     * @uses TelephonyHuntingGenericScreenStruct::setDayType()
     * @uses TelephonyHuntingGenericScreenStruct::setForwardPolicyIndex()
     * @param string $status
     * @param string $timeEnd
     * @param string $timeStart
     * @param string $dayType
     * @param string $forwardPolicyIndex
     */
    public function __construct($status = null, $timeEnd = null, $timeStart = null, $dayType = null, $forwardPolicyIndex = null)
    {
        $this
            ->setStatus($status)
            ->setTimeEnd($timeEnd)
            ->setTimeStart($timeStart)
            ->setDayType($dayType)
            ->setForwardPolicyIndex($forwardPolicyIndex);
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get timeEnd value
     * @return string|null
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }
    /**
     * Set timeEnd value
     * @param string $timeEnd
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenStruct
     */
    public function setTimeEnd($timeEnd = null)
    {
        // validation for constraint: string
        if (!is_null($timeEnd) && !is_string($timeEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeEnd)), __LINE__);
        }
        $this->timeEnd = $timeEnd;
        return $this;
    }
    /**
     * Get timeStart value
     * @return string|null
     */
    public function getTimeStart()
    {
        return $this->timeStart;
    }
    /**
     * Set timeStart value
     * @param string $timeStart
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenStruct
     */
    public function setTimeStart($timeStart = null)
    {
        // validation for constraint: string
        if (!is_null($timeStart) && !is_string($timeStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeStart)), __LINE__);
        }
        $this->timeStart = $timeStart;
        return $this;
    }
    /**
     * Get dayType value
     * @return string|null
     */
    public function getDayType()
    {
        return $this->dayType;
    }
    /**
     * Set dayType value
     * @param string $dayType
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenStruct
     */
    public function setDayType($dayType = null)
    {
        // validation for constraint: string
        if (!is_null($dayType) && !is_string($dayType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dayType)), __LINE__);
        }
        $this->dayType = $dayType;
        return $this;
    }
    /**
     * Get forwardPolicyIndex value
     * @return string|null
     */
    public function getForwardPolicyIndex()
    {
        return $this->forwardPolicyIndex;
    }
    /**
     * Set forwardPolicyIndex value
     * @param string $forwardPolicyIndex
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenStruct
     */
    public function setForwardPolicyIndex($forwardPolicyIndex = null)
    {
        // validation for constraint: string
        if (!is_null($forwardPolicyIndex) && !is_string($forwardPolicyIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwardPolicyIndex)), __LINE__);
        }
        $this->forwardPolicyIndex = $forwardPolicyIndex;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenStruct
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
