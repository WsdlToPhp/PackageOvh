<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $ip;
    /**
     * The mac
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $mac;
    /**
     * Constructor method for dedicatedIpVirtualMacAvailableReturn
     * @uses DedicatedIpVirtualMacAvailableReturn::setIp()
     * @uses DedicatedIpVirtualMacAvailableReturn::setMac()
     * @param \Ovh\ArrayType\MyArrayOfStringType $ip
     * @param \Ovh\ArrayType\MyArrayOfStringType $mac
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfStringType $ip = null, \Ovh\ArrayType\MyArrayOfStringType $mac = null)
    {
        $this
            ->setIp($ip)
            ->setMac($mac);
    }
    /**
     * Get ip value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param \Ovh\ArrayType\MyArrayOfStringType $ip
     * @return \Ovh\StructType\DedicatedIpVirtualMacAvailableReturn
     */
    public function setIp(\Ovh\ArrayType\MyArrayOfStringType $ip = null)
    {
        $this->ip = $ip;
        return $this;
    }
    /**
     * Get mac value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getMac()
    {
        return $this->mac;
    }
    /**
     * Set mac value
     * @param \Ovh\ArrayType\MyArrayOfStringType $mac
     * @return \Ovh\StructType\DedicatedIpVirtualMacAvailableReturn
     */
    public function setMac(\Ovh\ArrayType\MyArrayOfStringType $mac = null)
    {
        $this->mac = $mac;
        return $this;
    }
}
