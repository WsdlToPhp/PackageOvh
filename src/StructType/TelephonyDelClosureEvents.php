<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDelClosureEvents StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDelClosureEvents extends AbstractStructBase
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
     * The deleteAll
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $deleteAll;
    /**
     * The uids
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $uids;
    /**
     * Constructor method for telephonyDelClosureEvents
     * @uses TelephonyDelClosureEvents::setSession()
     * @uses TelephonyDelClosureEvents::setNumber()
     * @uses TelephonyDelClosureEvents::setCountry()
     * @uses TelephonyDelClosureEvents::setDeleteAll()
     * @uses TelephonyDelClosureEvents::setUids()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param int $deleteAll
     * @param \PayPal\ArrayType\MyArrayOfStringType $uids
     */
    public function __construct($session = null, $number = null, $country = null, $deleteAll = null, \PayPal\ArrayType\MyArrayOfStringType $uids = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setDeleteAll($deleteAll)
            ->setUids($uids);
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
     * @return \PayPal\StructType\TelephonyDelClosureEvents
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
     * @return \PayPal\StructType\TelephonyDelClosureEvents
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
     * @return \PayPal\StructType\TelephonyDelClosureEvents
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
     * Get deleteAll value
     * @return int|null
     */
    public function getDeleteAll()
    {
        return $this->deleteAll;
    }
    /**
     * Set deleteAll value
     * @param int $deleteAll
     * @return \PayPal\StructType\TelephonyDelClosureEvents
     */
    public function setDeleteAll($deleteAll = null)
    {
        // validation for constraint: int
        if (!is_null($deleteAll) && !is_numeric($deleteAll)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deleteAll)), __LINE__);
        }
        $this->deleteAll = $deleteAll;
        return $this;
    }
    /**
     * Get uids value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getUids()
    {
        return $this->uids;
    }
    /**
     * Set uids value
     * @param \PayPal\ArrayType\MyArrayOfStringType $uids
     * @return \PayPal\StructType\TelephonyDelClosureEvents
     */
    public function setUids(\PayPal\ArrayType\MyArrayOfStringType $uids = null)
    {
        $this->uids = $uids;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyDelClosureEvents
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
