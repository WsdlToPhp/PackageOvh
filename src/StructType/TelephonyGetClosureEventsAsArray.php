<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyGetClosureEventsAsArray StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyGetClosureEventsAsArray extends AbstractStructBase
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
     * The dateStart
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dateStart;
    /**
     * The dateEnd
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dateEnd;
    /**
     * The categories
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $categories;
    /**
     * Constructor method for telephonyGetClosureEventsAsArray
     * @uses TelephonyGetClosureEventsAsArray::setSession()
     * @uses TelephonyGetClosureEventsAsArray::setNumber()
     * @uses TelephonyGetClosureEventsAsArray::setCountry()
     * @uses TelephonyGetClosureEventsAsArray::setDateStart()
     * @uses TelephonyGetClosureEventsAsArray::setDateEnd()
     * @uses TelephonyGetClosureEventsAsArray::setCategories()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $dateStart
     * @param string $dateEnd
     * @param \PayPal\ArrayType\MyArrayOfStringType $categories
     */
    public function __construct($session = null, $number = null, $country = null, $dateStart = null, $dateEnd = null, \PayPal\ArrayType\MyArrayOfStringType $categories = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setDateStart($dateStart)
            ->setDateEnd($dateEnd)
            ->setCategories($categories);
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
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArray
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
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArray
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
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArray
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
     * Get dateStart value
     * @return string|null
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }
    /**
     * Set dateStart value
     * @param string $dateStart
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArray
     */
    public function setDateStart($dateStart = null)
    {
        // validation for constraint: string
        if (!is_null($dateStart) && !is_string($dateStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateStart)), __LINE__);
        }
        $this->dateStart = $dateStart;
        return $this;
    }
    /**
     * Get dateEnd value
     * @return string|null
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }
    /**
     * Set dateEnd value
     * @param string $dateEnd
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArray
     */
    public function setDateEnd($dateEnd = null)
    {
        // validation for constraint: string
        if (!is_null($dateEnd) && !is_string($dateEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateEnd)), __LINE__);
        }
        $this->dateEnd = $dateEnd;
        return $this;
    }
    /**
     * Get categories value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getCategories()
    {
        return $this->categories;
    }
    /**
     * Set categories value
     * @param \PayPal\ArrayType\MyArrayOfStringType $categories
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArray
     */
    public function setCategories(\PayPal\ArrayType\MyArrayOfStringType $categories = null)
    {
        $this->categories = $categories;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArray
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
