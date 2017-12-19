<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCallList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCallList extends AbstractStructBase
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
     * The listBegin
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $listBegin;
    /**
     * The listLimit
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $listLimit;
    /**
     * The faxReceived
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $faxReceived;
    /**
     * Constructor method for telephonyFaxCallList
     * @uses TelephonyFaxCallList::setSession()
     * @uses TelephonyFaxCallList::setNumber()
     * @uses TelephonyFaxCallList::setCountry()
     * @uses TelephonyFaxCallList::setListBegin()
     * @uses TelephonyFaxCallList::setListLimit()
     * @uses TelephonyFaxCallList::setFaxReceived()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param int $listBegin
     * @param int $listLimit
     * @param bool $faxReceived
     */
    public function __construct($session = null, $number = null, $country = null, $listBegin = null, $listLimit = null, $faxReceived = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setListBegin($listBegin)
            ->setListLimit($listLimit)
            ->setFaxReceived($faxReceived);
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
     * @return \PayPal\StructType\TelephonyFaxCallList
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
     * @return \PayPal\StructType\TelephonyFaxCallList
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
     * @return \PayPal\StructType\TelephonyFaxCallList
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
     * @return \PayPal\StructType\TelephonyFaxCallList
     */
    public function setListBegin($listBegin = null)
    {
        // validation for constraint: int
        if (!is_null($listBegin) && !is_numeric($listBegin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listBegin)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyFaxCallList
     */
    public function setListLimit($listLimit = null)
    {
        // validation for constraint: int
        if (!is_null($listLimit) && !is_numeric($listLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listLimit)), __LINE__);
        }
        $this->listLimit = $listLimit;
        return $this;
    }
    /**
     * Get faxReceived value
     * @return bool|null
     */
    public function getFaxReceived()
    {
        return $this->faxReceived;
    }
    /**
     * Set faxReceived value
     * @param bool $faxReceived
     * @return \PayPal\StructType\TelephonyFaxCallList
     */
    public function setFaxReceived($faxReceived = null)
    {
        // validation for constraint: boolean
        if (!is_null($faxReceived) && !is_bool($faxReceived)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($faxReceived)), __LINE__);
        }
        $this->faxReceived = $faxReceived;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyFaxCallList
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
