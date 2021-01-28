<?php

namespace Ovh\StructType;

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
     * The deleteAll
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $deleteAll;
    /**
     * The uids
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
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
     * @param \Ovh\ArrayType\MyArrayOfStringType $uids
     */
    public function __construct($session = null, $number = null, $country = null, $deleteAll = null, \Ovh\ArrayType\MyArrayOfStringType $uids = null)
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
     * @return \Ovh\StructType\TelephonyDelClosureEvents
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
     * @return \Ovh\StructType\TelephonyDelClosureEvents
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
     * @return \Ovh\StructType\TelephonyDelClosureEvents
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
     * @return \Ovh\StructType\TelephonyDelClosureEvents
     */
    public function setDeleteAll($deleteAll = null)
    {
        // validation for constraint: int
        if (!is_null($deleteAll) && !(is_int($deleteAll) || ctype_digit($deleteAll))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deleteAll, true), gettype($deleteAll)), __LINE__);
        }
        $this->deleteAll = $deleteAll;
        return $this;
    }
    /**
     * Get uids value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getUids()
    {
        return $this->uids;
    }
    /**
     * Set uids value
     * @param \Ovh\ArrayType\MyArrayOfStringType $uids
     * @return \Ovh\StructType\TelephonyDelClosureEvents
     */
    public function setUids(\Ovh\ArrayType\MyArrayOfStringType $uids = null)
    {
        $this->uids = $uids;
        return $this;
    }
}
