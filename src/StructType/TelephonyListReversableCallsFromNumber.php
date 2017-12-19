<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyListReversableCallsFromNumber StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyListReversableCallsFromNumber extends AbstractStructBase
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
     * The reversableDelay
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reversableDelay;
    /**
     * The pagingStart
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $pagingStart;
    /**
     * The pagingLimit
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $pagingLimit;
    /**
     * The sortOrder
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sortOrder;
    /**
     * The sortField
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sortField;
    /**
     * Constructor method for telephonyListReversableCallsFromNumber
     * @uses TelephonyListReversableCallsFromNumber::setSession()
     * @uses TelephonyListReversableCallsFromNumber::setNumber()
     * @uses TelephonyListReversableCallsFromNumber::setCountry()
     * @uses TelephonyListReversableCallsFromNumber::setReversableDelay()
     * @uses TelephonyListReversableCallsFromNumber::setPagingStart()
     * @uses TelephonyListReversableCallsFromNumber::setPagingLimit()
     * @uses TelephonyListReversableCallsFromNumber::setSortOrder()
     * @uses TelephonyListReversableCallsFromNumber::setSortField()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $reversableDelay
     * @param int $pagingStart
     * @param int $pagingLimit
     * @param string $sortOrder
     * @param string $sortField
     */
    public function __construct($session = null, $number = null, $country = null, $reversableDelay = null, $pagingStart = null, $pagingLimit = null, $sortOrder = null, $sortField = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setReversableDelay($reversableDelay)
            ->setPagingStart($pagingStart)
            ->setPagingLimit($pagingLimit)
            ->setSortOrder($sortOrder)
            ->setSortField($sortField);
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
     * @return \PayPal\StructType\TelephonyListReversableCallsFromNumber
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
     * @return \PayPal\StructType\TelephonyListReversableCallsFromNumber
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
     * @return \PayPal\StructType\TelephonyListReversableCallsFromNumber
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
     * Get reversableDelay value
     * @return string|null
     */
    public function getReversableDelay()
    {
        return $this->reversableDelay;
    }
    /**
     * Set reversableDelay value
     * @param string $reversableDelay
     * @return \PayPal\StructType\TelephonyListReversableCallsFromNumber
     */
    public function setReversableDelay($reversableDelay = null)
    {
        // validation for constraint: string
        if (!is_null($reversableDelay) && !is_string($reversableDelay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reversableDelay)), __LINE__);
        }
        $this->reversableDelay = $reversableDelay;
        return $this;
    }
    /**
     * Get pagingStart value
     * @return int|null
     */
    public function getPagingStart()
    {
        return $this->pagingStart;
    }
    /**
     * Set pagingStart value
     * @param int $pagingStart
     * @return \PayPal\StructType\TelephonyListReversableCallsFromNumber
     */
    public function setPagingStart($pagingStart = null)
    {
        // validation for constraint: int
        if (!is_null($pagingStart) && !is_numeric($pagingStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pagingStart)), __LINE__);
        }
        $this->pagingStart = $pagingStart;
        return $this;
    }
    /**
     * Get pagingLimit value
     * @return int|null
     */
    public function getPagingLimit()
    {
        return $this->pagingLimit;
    }
    /**
     * Set pagingLimit value
     * @param int $pagingLimit
     * @return \PayPal\StructType\TelephonyListReversableCallsFromNumber
     */
    public function setPagingLimit($pagingLimit = null)
    {
        // validation for constraint: int
        if (!is_null($pagingLimit) && !is_numeric($pagingLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pagingLimit)), __LINE__);
        }
        $this->pagingLimit = $pagingLimit;
        return $this;
    }
    /**
     * Get sortOrder value
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @param string $sortOrder
     * @return \PayPal\StructType\TelephonyListReversableCallsFromNumber
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: string
        if (!is_null($sortOrder) && !is_string($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sortOrder)), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get sortField value
     * @return string|null
     */
    public function getSortField()
    {
        return $this->sortField;
    }
    /**
     * Set sortField value
     * @param string $sortField
     * @return \PayPal\StructType\TelephonyListReversableCallsFromNumber
     */
    public function setSortField($sortField = null)
    {
        // validation for constraint: string
        if (!is_null($sortField) && !is_string($sortField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sortField)), __LINE__);
        }
        $this->sortField = $sortField;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyListReversableCallsFromNumber
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
