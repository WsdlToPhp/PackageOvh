<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyListSummationCallsFromNumber StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyListSummationCallsFromNumber extends AbstractStructBase
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
     * The reversableDelay
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reversableDelay;
    /**
     * The sortOrder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sortOrder;
    /**
     * The sortField
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sortField;
    /**
     * Constructor method for telephonyListSummationCallsFromNumber
     * @uses TelephonyListSummationCallsFromNumber::setSession()
     * @uses TelephonyListSummationCallsFromNumber::setNumber()
     * @uses TelephonyListSummationCallsFromNumber::setCountry()
     * @uses TelephonyListSummationCallsFromNumber::setReversableDelay()
     * @uses TelephonyListSummationCallsFromNumber::setSortOrder()
     * @uses TelephonyListSummationCallsFromNumber::setSortField()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $reversableDelay
     * @param string $sortOrder
     * @param string $sortField
     */
    public function __construct($session = null, $number = null, $country = null, $reversableDelay = null, $sortOrder = null, $sortField = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setReversableDelay($reversableDelay)
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
     * @return \Ovh\StructType\TelephonyListSummationCallsFromNumber
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
     * @return \Ovh\StructType\TelephonyListSummationCallsFromNumber
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
     * @return \Ovh\StructType\TelephonyListSummationCallsFromNumber
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
     * @return \Ovh\StructType\TelephonyListSummationCallsFromNumber
     */
    public function setReversableDelay($reversableDelay = null)
    {
        // validation for constraint: string
        if (!is_null($reversableDelay) && !is_string($reversableDelay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reversableDelay, true), gettype($reversableDelay)), __LINE__);
        }
        $this->reversableDelay = $reversableDelay;
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
     * @return \Ovh\StructType\TelephonyListSummationCallsFromNumber
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: string
        if (!is_null($sortOrder) && !is_string($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortOrder, true), gettype($sortOrder)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyListSummationCallsFromNumber
     */
    public function setSortField($sortField = null)
    {
        // validation for constraint: string
        if (!is_null($sortField) && !is_string($sortField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortField, true), gettype($sortField)), __LINE__);
        }
        $this->sortField = $sortField;
        return $this;
    }
}
