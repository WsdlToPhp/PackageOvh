<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyScreenListInfoModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyScreenListInfoModify extends AbstractStructBase
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
     * The screenListType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $screenListType;
    /**
     * The numbersScreen
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $numbersScreen;
    /**
     * The naturesScreen
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $naturesScreen;
    /**
     * Constructor method for telephonyScreenListInfoModify
     * @uses TelephonyScreenListInfoModify::setSession()
     * @uses TelephonyScreenListInfoModify::setNumber()
     * @uses TelephonyScreenListInfoModify::setCountry()
     * @uses TelephonyScreenListInfoModify::setScreenListType()
     * @uses TelephonyScreenListInfoModify::setNumbersScreen()
     * @uses TelephonyScreenListInfoModify::setNaturesScreen()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $screenListType
     * @param \PayPal\ArrayType\MyArrayOfStringType $numbersScreen
     * @param \PayPal\ArrayType\MyArrayOfStringType $naturesScreen
     */
    public function __construct($session = null, $number = null, $country = null, $screenListType = null, \PayPal\ArrayType\MyArrayOfStringType $numbersScreen = null, \PayPal\ArrayType\MyArrayOfStringType $naturesScreen = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setScreenListType($screenListType)
            ->setNumbersScreen($numbersScreen)
            ->setNaturesScreen($naturesScreen);
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
     * @return \PayPal\StructType\TelephonyScreenListInfoModify
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
     * @return \PayPal\StructType\TelephonyScreenListInfoModify
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
     * @return \PayPal\StructType\TelephonyScreenListInfoModify
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
     * Get screenListType value
     * @return string|null
     */
    public function getScreenListType()
    {
        return $this->screenListType;
    }
    /**
     * Set screenListType value
     * @param string $screenListType
     * @return \PayPal\StructType\TelephonyScreenListInfoModify
     */
    public function setScreenListType($screenListType = null)
    {
        // validation for constraint: string
        if (!is_null($screenListType) && !is_string($screenListType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($screenListType)), __LINE__);
        }
        $this->screenListType = $screenListType;
        return $this;
    }
    /**
     * Get numbersScreen value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getNumbersScreen()
    {
        return $this->numbersScreen;
    }
    /**
     * Set numbersScreen value
     * @param \PayPal\ArrayType\MyArrayOfStringType $numbersScreen
     * @return \PayPal\StructType\TelephonyScreenListInfoModify
     */
    public function setNumbersScreen(\PayPal\ArrayType\MyArrayOfStringType $numbersScreen = null)
    {
        $this->numbersScreen = $numbersScreen;
        return $this;
    }
    /**
     * Get naturesScreen value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getNaturesScreen()
    {
        return $this->naturesScreen;
    }
    /**
     * Set naturesScreen value
     * @param \PayPal\ArrayType\MyArrayOfStringType $naturesScreen
     * @return \PayPal\StructType\TelephonyScreenListInfoModify
     */
    public function setNaturesScreen(\PayPal\ArrayType\MyArrayOfStringType $naturesScreen = null)
    {
        $this->naturesScreen = $naturesScreen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyScreenListInfoModify
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
