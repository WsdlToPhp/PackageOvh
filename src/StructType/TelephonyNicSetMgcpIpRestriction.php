<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNicSetMgcpIpRestriction StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNicSetMgcpIpRestriction extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The ips
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $ips;
    /**
     * Constructor method for telephonyNicSetMgcpIpRestriction
     * @uses TelephonyNicSetMgcpIpRestriction::setSession()
     * @uses TelephonyNicSetMgcpIpRestriction::setIps()
     * @param string $session
     * @param \PayPal\ArrayType\MyArrayOfStringType $ips
     */
    public function __construct($session = null, \PayPal\ArrayType\MyArrayOfStringType $ips = null)
    {
        $this
            ->setSession($session)
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
     * @return \PayPal\StructType\TelephonyNicSetMgcpIpRestriction
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
     * Get ips value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getIps()
    {
        return $this->ips;
    }
    /**
     * Set ips value
     * @param \PayPal\ArrayType\MyArrayOfStringType $ips
     * @return \PayPal\StructType\TelephonyNicSetMgcpIpRestriction
     */
    public function setIps(\PayPal\ArrayType\MyArrayOfStringType $ips = null)
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
     * @return \PayPal\StructType\TelephonyNicSetMgcpIpRestriction
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
