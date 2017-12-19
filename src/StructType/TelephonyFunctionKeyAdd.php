<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFunctionKeyAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFunctionKeyAdd extends AbstractStructBase
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
     * The keyNum
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $keyNum;
    /**
     * The function
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $function;
    /**
     * The relatedNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $relatedNumber;
    /**
     * Constructor method for telephonyFunctionKeyAdd
     * @uses TelephonyFunctionKeyAdd::setSession()
     * @uses TelephonyFunctionKeyAdd::setNumber()
     * @uses TelephonyFunctionKeyAdd::setCountry()
     * @uses TelephonyFunctionKeyAdd::setKeyNum()
     * @uses TelephonyFunctionKeyAdd::setFunction()
     * @uses TelephonyFunctionKeyAdd::setRelatedNumber()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param int $keyNum
     * @param string $function
     * @param string $relatedNumber
     */
    public function __construct($session = null, $number = null, $country = null, $keyNum = null, $function = null, $relatedNumber = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setKeyNum($keyNum)
            ->setFunction($function)
            ->setRelatedNumber($relatedNumber);
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
     * @return \PayPal\StructType\TelephonyFunctionKeyAdd
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
     * @return \PayPal\StructType\TelephonyFunctionKeyAdd
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
     * @return \PayPal\StructType\TelephonyFunctionKeyAdd
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
     * Get keyNum value
     * @return int|null
     */
    public function getKeyNum()
    {
        return $this->keyNum;
    }
    /**
     * Set keyNum value
     * @param int $keyNum
     * @return \PayPal\StructType\TelephonyFunctionKeyAdd
     */
    public function setKeyNum($keyNum = null)
    {
        // validation for constraint: int
        if (!is_null($keyNum) && !is_numeric($keyNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($keyNum)), __LINE__);
        }
        $this->keyNum = $keyNum;
        return $this;
    }
    /**
     * Get function value
     * @return string|null
     */
    public function getFunction()
    {
        return $this->function;
    }
    /**
     * Set function value
     * @param string $function
     * @return \PayPal\StructType\TelephonyFunctionKeyAdd
     */
    public function setFunction($function = null)
    {
        // validation for constraint: string
        if (!is_null($function) && !is_string($function)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($function)), __LINE__);
        }
        $this->function = $function;
        return $this;
    }
    /**
     * Get relatedNumber value
     * @return string|null
     */
    public function getRelatedNumber()
    {
        return $this->relatedNumber;
    }
    /**
     * Set relatedNumber value
     * @param string $relatedNumber
     * @return \PayPal\StructType\TelephonyFunctionKeyAdd
     */
    public function setRelatedNumber($relatedNumber = null)
    {
        // validation for constraint: string
        if (!is_null($relatedNumber) && !is_string($relatedNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relatedNumber)), __LINE__);
        }
        $this->relatedNumber = $relatedNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyFunctionKeyAdd
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
