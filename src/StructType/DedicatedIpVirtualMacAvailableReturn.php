<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIpVirtualMacAvailableReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIpVirtualMacAvailableReturn extends AbstractStructBase
{
    /**
     * The ip
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $ip;
    /**
     * The mac
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $mac;
    /**
     * Constructor method for dedicatedIpVirtualMacAvailableReturn
     * @uses DedicatedIpVirtualMacAvailableReturn::setIp()
     * @uses DedicatedIpVirtualMacAvailableReturn::setMac()
     * @param \PayPal\ArrayType\MyArrayOfStringType $ip
     * @param \PayPal\ArrayType\MyArrayOfStringType $mac
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfStringType $ip = null, \PayPal\ArrayType\MyArrayOfStringType $mac = null)
    {
        $this
            ->setIp($ip)
            ->setMac($mac);
    }
    /**
     * Get ip value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param \PayPal\ArrayType\MyArrayOfStringType $ip
     * @return \PayPal\StructType\DedicatedIpVirtualMacAvailableReturn
     */
    public function setIp(\PayPal\ArrayType\MyArrayOfStringType $ip = null)
    {
        $this->ip = $ip;
        return $this;
    }
    /**
     * Get mac value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getMac()
    {
        return $this->mac;
    }
    /**
     * Set mac value
     * @param \PayPal\ArrayType\MyArrayOfStringType $mac
     * @return \PayPal\StructType\DedicatedIpVirtualMacAvailableReturn
     */
    public function setMac(\PayPal\ArrayType\MyArrayOfStringType $mac = null)
    {
        $this->mac = $mac;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedIpVirtualMacAvailableReturn
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
