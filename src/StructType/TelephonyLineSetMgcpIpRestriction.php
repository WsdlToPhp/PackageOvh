<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineSetMgcpIpRestriction StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineSetMgcpIpRestriction extends AbstractStructBase
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
     * The ips
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $ips;
    /**
     * Constructor method for telephonyLineSetMgcpIpRestriction
     * @uses TelephonyLineSetMgcpIpRestriction::setSession()
     * @uses TelephonyLineSetMgcpIpRestriction::setNumber()
     * @uses TelephonyLineSetMgcpIpRestriction::setCountry()
     * @uses TelephonyLineSetMgcpIpRestriction::setIps()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param \Ovh\ArrayType\MyArrayOfStringType $ips
     */
    public function __construct($session = null, $number = null, $country = null, \Ovh\ArrayType\MyArrayOfStringType $ips = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setIps($ips);
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
     * @return \Ovh\StructType\TelephonyLineSetMgcpIpRestriction
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
     * @return \Ovh\StructType\TelephonyLineSetMgcpIpRestriction
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
     * @return \Ovh\StructType\TelephonyLineSetMgcpIpRestriction
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
     * Get ips value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getIps()
    {
        return $this->ips;
    }
    /**
     * Set ips value
     * @param \Ovh\ArrayType\MyArrayOfStringType $ips
     * @return \Ovh\StructType\TelephonyLineSetMgcpIpRestriction
     */
    public function setIps(\Ovh\ArrayType\MyArrayOfStringType $ips = null)
    {
        $this->ips = $ips;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyLineSetMgcpIpRestriction
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
