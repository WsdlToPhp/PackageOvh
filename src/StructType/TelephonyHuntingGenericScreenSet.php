<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingGenericScreenSet StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingGenericScreenSet extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The timesStart
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $timesStart;
    /**
     * The timesEnd
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $timesEnd;
    /**
     * The daysType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $daysType;
    /**
     * The forwardPolicyIndex
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $forwardPolicyIndex;
    /**
     * Constructor method for telephonyHuntingGenericScreenSet
     * @uses TelephonyHuntingGenericScreenSet::setSession()
     * @uses TelephonyHuntingGenericScreenSet::setNumber()
     * @uses TelephonyHuntingGenericScreenSet::setCountry()
     * @uses TelephonyHuntingGenericScreenSet::setTimesStart()
     * @uses TelephonyHuntingGenericScreenSet::setTimesEnd()
     * @uses TelephonyHuntingGenericScreenSet::setDaysType()
     * @uses TelephonyHuntingGenericScreenSet::setForwardPolicyIndex()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param \Ovh\ArrayType\MyArrayOfStringType $timesStart
     * @param \Ovh\ArrayType\MyArrayOfStringType $timesEnd
     * @param \Ovh\ArrayType\MyArrayOfStringType $daysType
     * @param \Ovh\ArrayType\MyArrayOfStringType $forwardPolicyIndex
     */
    public function __construct($session = null, $number = null, $country = null, \Ovh\ArrayType\MyArrayOfStringType $timesStart = null, \Ovh\ArrayType\MyArrayOfStringType $timesEnd = null, \Ovh\ArrayType\MyArrayOfStringType $daysType = null, \Ovh\ArrayType\MyArrayOfStringType $forwardPolicyIndex = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setTimesStart($timesStart)
            ->setTimesEnd($timesEnd)
            ->setDaysType($daysType)
            ->setForwardPolicyIndex($forwardPolicyIndex);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenSet
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenSet
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenSet
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get timesStart value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getTimesStart()
    {
        return $this->timesStart;
    }
    /**
     * Set timesStart value
     * @param \Ovh\ArrayType\MyArrayOfStringType $timesStart
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenSet
     */
    public function setTimesStart(\Ovh\ArrayType\MyArrayOfStringType $timesStart = null)
    {
        $this->timesStart = $timesStart;
        return $this;
    }
    /**
     * Get timesEnd value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getTimesEnd()
    {
        return $this->timesEnd;
    }
    /**
     * Set timesEnd value
     * @param \Ovh\ArrayType\MyArrayOfStringType $timesEnd
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenSet
     */
    public function setTimesEnd(\Ovh\ArrayType\MyArrayOfStringType $timesEnd = null)
    {
        $this->timesEnd = $timesEnd;
        return $this;
    }
    /**
     * Get daysType value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getDaysType()
    {
        return $this->daysType;
    }
    /**
     * Set daysType value
     * @param \Ovh\ArrayType\MyArrayOfStringType $daysType
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenSet
     */
    public function setDaysType(\Ovh\ArrayType\MyArrayOfStringType $daysType = null)
    {
        $this->daysType = $daysType;
        return $this;
    }
    /**
     * Get forwardPolicyIndex value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getForwardPolicyIndex()
    {
        return $this->forwardPolicyIndex;
    }
    /**
     * Set forwardPolicyIndex value
     * @param \Ovh\ArrayType\MyArrayOfStringType $forwardPolicyIndex
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenSet
     */
    public function setForwardPolicyIndex(\Ovh\ArrayType\MyArrayOfStringType $forwardPolicyIndex = null)
    {
        $this->forwardPolicyIndex = $forwardPolicyIndex;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenSet
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
