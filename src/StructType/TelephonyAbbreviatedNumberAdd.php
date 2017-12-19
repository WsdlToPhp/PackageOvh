<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAbbreviatedNumberAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAbbreviatedNumberAdd extends AbstractStructBase
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
     * The abbreviatedNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $abbreviatedNumber;
    /**
     * The relatedNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $relatedNumber;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The surname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $surname;
    /**
     * Constructor method for telephonyAbbreviatedNumberAdd
     * @uses TelephonyAbbreviatedNumberAdd::setSession()
     * @uses TelephonyAbbreviatedNumberAdd::setNumber()
     * @uses TelephonyAbbreviatedNumberAdd::setCountry()
     * @uses TelephonyAbbreviatedNumberAdd::setAbbreviatedNumber()
     * @uses TelephonyAbbreviatedNumberAdd::setRelatedNumber()
     * @uses TelephonyAbbreviatedNumberAdd::setName()
     * @uses TelephonyAbbreviatedNumberAdd::setSurname()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $abbreviatedNumber
     * @param string $relatedNumber
     * @param string $name
     * @param string $surname
     */
    public function __construct($session = null, $number = null, $country = null, $abbreviatedNumber = null, $relatedNumber = null, $name = null, $surname = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setAbbreviatedNumber($abbreviatedNumber)
            ->setRelatedNumber($relatedNumber)
            ->setName($name)
            ->setSurname($surname);
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
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberAdd
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
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberAdd
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
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberAdd
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
     * Get abbreviatedNumber value
     * @return string|null
     */
    public function getAbbreviatedNumber()
    {
        return $this->abbreviatedNumber;
    }
    /**
     * Set abbreviatedNumber value
     * @param string $abbreviatedNumber
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberAdd
     */
    public function setAbbreviatedNumber($abbreviatedNumber = null)
    {
        // validation for constraint: string
        if (!is_null($abbreviatedNumber) && !is_string($abbreviatedNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($abbreviatedNumber)), __LINE__);
        }
        $this->abbreviatedNumber = $abbreviatedNumber;
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
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberAdd
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
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberAdd
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get surname value
     * @return string|null
     */
    public function getSurname()
    {
        return $this->surname;
    }
    /**
     * Set surname value
     * @param string $surname
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberAdd
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surname)), __LINE__);
        }
        $this->surname = $surname;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberAdd
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
