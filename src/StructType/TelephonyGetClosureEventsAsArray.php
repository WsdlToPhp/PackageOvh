<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The dateStart
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dateStart;
    /**
     * The dateEnd
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dateEnd;
    /**
     * The categories
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
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
     * @param \Ovh\ArrayType\MyArrayOfStringType $categories
     */
    public function __construct($session = null, $number = null, $country = null, $dateStart = null, $dateEnd = null, \Ovh\ArrayType\MyArrayOfStringType $categories = null)
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
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArray
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArray
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArray
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArray
     */
    public function setDateStart($dateStart = null)
    {
        // validation for constraint: string
        if (!is_null($dateStart) && !is_string($dateStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateStart, true), gettype($dateStart)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArray
     */
    public function setDateEnd($dateEnd = null)
    {
        // validation for constraint: string
        if (!is_null($dateEnd) && !is_string($dateEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateEnd, true), gettype($dateEnd)), __LINE__);
        }
        $this->dateEnd = $dateEnd;
        return $this;
    }
    /**
     * Get categories value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getCategories()
    {
        return $this->categories;
    }
    /**
     * Set categories value
     * @param \Ovh\ArrayType\MyArrayOfStringType $categories
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArray
     */
    public function setCategories(\Ovh\ArrayType\MyArrayOfStringType $categories = null)
    {
        $this->categories = $categories;
        return $this;
    }
}
