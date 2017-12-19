<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryInfoGetSameSiret StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryInfoGetSameSiret extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The callNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callNumber;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * Constructor method for telephonyDirectoryInfoGetSameSiret
     * @uses TelephonyDirectoryInfoGetSameSiret::setSession()
     * @uses TelephonyDirectoryInfoGetSameSiret::setCallNumber()
     * @uses TelephonyDirectoryInfoGetSameSiret::setCountry()
     * @param string $session
     * @param string $callNumber
     * @param string $country
     */
    public function __construct($session = null, $callNumber = null, $country = null)
    {
        $this
            ->setSession($session)
            ->setCallNumber($callNumber)
            ->setCountry($country);
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
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSameSiret
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
     * Get callNumber value
     * @return string|null
     */
    public function getCallNumber()
    {
        return $this->callNumber;
    }
    /**
     * Set callNumber value
     * @param string $callNumber
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSameSiret
     */
    public function setCallNumber($callNumber = null)
    {
        // validation for constraint: string
        if (!is_null($callNumber) && !is_string($callNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callNumber)), __LINE__);
        }
        $this->callNumber = $callNumber;
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
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSameSiret
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSameSiret
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
