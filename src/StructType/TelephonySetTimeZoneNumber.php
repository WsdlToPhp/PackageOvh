<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySetTimeZoneNumber StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySetTimeZoneNumber extends AbstractStructBase
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
     * The countryCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $countryCode;
    /**
     * The timeZone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $timeZone;
    /**
     * Constructor method for telephonySetTimeZoneNumber
     * @uses TelephonySetTimeZoneNumber::setSession()
     * @uses TelephonySetTimeZoneNumber::setNumber()
     * @uses TelephonySetTimeZoneNumber::setCountryCode()
     * @uses TelephonySetTimeZoneNumber::setTimeZone()
     * @param string $session
     * @param string $number
     * @param string $countryCode
     * @param string $timeZone
     */
    public function __construct($session = null, $number = null, $countryCode = null, $timeZone = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountryCode($countryCode)
            ->setTimeZone($timeZone);
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
     * @return \Ovh\StructType\TelephonySetTimeZoneNumber
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
     * @return \Ovh\StructType\TelephonySetTimeZoneNumber
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
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Ovh\StructType\TelephonySetTimeZoneNumber
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Get timeZone value
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }
    /**
     * Set timeZone value
     * @param string $timeZone
     * @return \Ovh\StructType\TelephonySetTimeZoneNumber
     */
    public function setTimeZone($timeZone = null)
    {
        // validation for constraint: string
        if (!is_null($timeZone) && !is_string($timeZone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeZone)), __LINE__);
        }
        $this->timeZone = $timeZone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySetTimeZoneNumber
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
