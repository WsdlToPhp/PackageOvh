<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineSwitchOldOfferPossibility StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineSwitchOldOfferPossibility extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The numbers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $numbers;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * Constructor method for telephonyLineSwitchOldOfferPossibility
     * @uses TelephonyLineSwitchOldOfferPossibility::setSession()
     * @uses TelephonyLineSwitchOldOfferPossibility::setNumbers()
     * @uses TelephonyLineSwitchOldOfferPossibility::setCountry()
     * @param string $session
     * @param \PayPal\ArrayType\MyArrayOfStringType $numbers
     * @param string $country
     */
    public function __construct($session = null, \PayPal\ArrayType\MyArrayOfStringType $numbers = null, $country = null)
    {
        $this
            ->setSession($session)
            ->setNumbers($numbers)
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
     * @return \PayPal\StructType\TelephonyLineSwitchOldOfferPossibility
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
     * Get numbers value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getNumbers()
    {
        return $this->numbers;
    }
    /**
     * Set numbers value
     * @param \PayPal\ArrayType\MyArrayOfStringType $numbers
     * @return \PayPal\StructType\TelephonyLineSwitchOldOfferPossibility
     */
    public function setNumbers(\PayPal\ArrayType\MyArrayOfStringType $numbers = null)
    {
        $this->numbers = $numbers;
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
     * @return \PayPal\StructType\TelephonyLineSwitchOldOfferPossibility
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
     * @return \PayPal\StructType\TelephonyLineSwitchOldOfferPossibility
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
