<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyCallList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyCallList extends AbstractStructBase
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
     * The listBegin
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $listBegin;
    /**
     * The listLimit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $listLimit;
    /**
     * The listType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $listType;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The callReceived
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $callReceived;
    /**
     * The filterSearch
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filterSearch;
    /**
     * The filterValue
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filterValue;
    /**
     * The planType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $planType;
    /**
     * Constructor method for telephonyCallList
     * @uses TelephonyCallList::setSession()
     * @uses TelephonyCallList::setNumber()
     * @uses TelephonyCallList::setCountry()
     * @uses TelephonyCallList::setListBegin()
     * @uses TelephonyCallList::setListLimit()
     * @uses TelephonyCallList::setListType()
     * @uses TelephonyCallList::setDate()
     * @uses TelephonyCallList::setCallReceived()
     * @uses TelephonyCallList::setFilterSearch()
     * @uses TelephonyCallList::setFilterValue()
     * @uses TelephonyCallList::setPlanType()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param int $listBegin
     * @param int $listLimit
     * @param string $listType
     * @param string $date
     * @param bool $callReceived
     * @param string $filterSearch
     * @param string $filterValue
     * @param string $planType
     */
    public function __construct($session = null, $number = null, $country = null, $listBegin = null, $listLimit = null, $listType = null, $date = null, $callReceived = null, $filterSearch = null, $filterValue = null, $planType = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setListBegin($listBegin)
            ->setListLimit($listLimit)
            ->setListType($listType)
            ->setDate($date)
            ->setCallReceived($callReceived)
            ->setFilterSearch($filterSearch)
            ->setFilterValue($filterValue)
            ->setPlanType($planType);
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
     * @return \Ovh\StructType\TelephonyCallList
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
     * @return \Ovh\StructType\TelephonyCallList
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
     * @return \Ovh\StructType\TelephonyCallList
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
     * Get listBegin value
     * @return int|null
     */
    public function getListBegin()
    {
        return $this->listBegin;
    }
    /**
     * Set listBegin value
     * @param int $listBegin
     * @return \Ovh\StructType\TelephonyCallList
     */
    public function setListBegin($listBegin = null)
    {
        // validation for constraint: int
        if (!is_null($listBegin) && !(is_int($listBegin) || ctype_digit($listBegin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listBegin, true), gettype($listBegin)), __LINE__);
        }
        $this->listBegin = $listBegin;
        return $this;
    }
    /**
     * Get listLimit value
     * @return int|null
     */
    public function getListLimit()
    {
        return $this->listLimit;
    }
    /**
     * Set listLimit value
     * @param int $listLimit
     * @return \Ovh\StructType\TelephonyCallList
     */
    public function setListLimit($listLimit = null)
    {
        // validation for constraint: int
        if (!is_null($listLimit) && !(is_int($listLimit) || ctype_digit($listLimit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listLimit, true), gettype($listLimit)), __LINE__);
        }
        $this->listLimit = $listLimit;
        return $this;
    }
    /**
     * Get listType value
     * @return string|null
     */
    public function getListType()
    {
        return $this->listType;
    }
    /**
     * Set listType value
     * @param string $listType
     * @return \Ovh\StructType\TelephonyCallList
     */
    public function setListType($listType = null)
    {
        // validation for constraint: string
        if (!is_null($listType) && !is_string($listType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listType, true), gettype($listType)), __LINE__);
        }
        $this->listType = $listType;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Ovh\StructType\TelephonyCallList
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get callReceived value
     * @return bool|null
     */
    public function getCallReceived()
    {
        return $this->callReceived;
    }
    /**
     * Set callReceived value
     * @param bool $callReceived
     * @return \Ovh\StructType\TelephonyCallList
     */
    public function setCallReceived($callReceived = null)
    {
        // validation for constraint: boolean
        if (!is_null($callReceived) && !is_bool($callReceived)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($callReceived, true), gettype($callReceived)), __LINE__);
        }
        $this->callReceived = $callReceived;
        return $this;
    }
    /**
     * Get filterSearch value
     * @return string|null
     */
    public function getFilterSearch()
    {
        return $this->filterSearch;
    }
    /**
     * Set filterSearch value
     * @param string $filterSearch
     * @return \Ovh\StructType\TelephonyCallList
     */
    public function setFilterSearch($filterSearch = null)
    {
        // validation for constraint: string
        if (!is_null($filterSearch) && !is_string($filterSearch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filterSearch, true), gettype($filterSearch)), __LINE__);
        }
        $this->filterSearch = $filterSearch;
        return $this;
    }
    /**
     * Get filterValue value
     * @return string|null
     */
    public function getFilterValue()
    {
        return $this->filterValue;
    }
    /**
     * Set filterValue value
     * @param string $filterValue
     * @return \Ovh\StructType\TelephonyCallList
     */
    public function setFilterValue($filterValue = null)
    {
        // validation for constraint: string
        if (!is_null($filterValue) && !is_string($filterValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filterValue, true), gettype($filterValue)), __LINE__);
        }
        $this->filterValue = $filterValue;
        return $this;
    }
    /**
     * Get planType value
     * @return string|null
     */
    public function getPlanType()
    {
        return $this->planType;
    }
    /**
     * Set planType value
     * @param string $planType
     * @return \Ovh\StructType\TelephonyCallList
     */
    public function setPlanType($planType = null)
    {
        // validation for constraint: string
        if (!is_null($planType) && !is_string($planType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planType, true), gettype($planType)), __LINE__);
        }
        $this->planType = $planType;
        return $this;
    }
}
