<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIpLoadBalancingServerStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIpLoadBalancingServerStruct extends AbstractStructBase
{
    /**
     * The hostname
     * @var string
     */
    public $hostname;
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * Constructor method for dedicatedIpLoadBalancingServerStruct
     * @uses DedicatedIpLoadBalancingServerStruct::setHostname()
     * @uses DedicatedIpLoadBalancingServerStruct::setIp()
     * @uses DedicatedIpLoadBalancingServerStruct::setStatus()
     * @param string $hostname
     * @param string $ip
     * @param string $status
     */
    public function __construct($hostname = null, $ip = null, $status = null)
    {
        $this
            ->setHostname($hostname)
            ->setIp($ip)
            ->setStatus($status);
    }
    /**
     * Get hostname value
     * @return string|null
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    /**
     * Set hostname value
     * @param string $hostname
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerStruct
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostname, true), gettype($hostname)), __LINE__);
        }
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * Get ip value
     * @return string|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param string $ip
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerStruct
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
}
