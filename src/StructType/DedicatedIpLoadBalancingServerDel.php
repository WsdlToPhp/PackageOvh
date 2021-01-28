<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIpLoadBalancingServerDel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIpLoadBalancingServerDel extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The ipLoadBalancing
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ipLoadBalancing;
    /**
     * The hostname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * Constructor method for dedicatedIpLoadBalancingServerDel
     * @uses DedicatedIpLoadBalancingServerDel::setSession()
     * @uses DedicatedIpLoadBalancingServerDel::setIpLoadBalancing()
     * @uses DedicatedIpLoadBalancingServerDel::setHostname()
     * @param string $session
     * @param string $ipLoadBalancing
     * @param string $hostname
     */
    public function __construct($session = null, $ipLoadBalancing = null, $hostname = null)
    {
        $this
            ->setSession($session)
            ->setIpLoadBalancing($ipLoadBalancing)
            ->setHostname($hostname);
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
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerDel
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
     * Get ipLoadBalancing value
     * @return string|null
     */
    public function getIpLoadBalancing()
    {
        return $this->ipLoadBalancing;
    }
    /**
     * Set ipLoadBalancing value
     * @param string $ipLoadBalancing
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerDel
     */
    public function setIpLoadBalancing($ipLoadBalancing = null)
    {
        // validation for constraint: string
        if (!is_null($ipLoadBalancing) && !is_string($ipLoadBalancing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ipLoadBalancing, true), gettype($ipLoadBalancing)), __LINE__);
        }
        $this->ipLoadBalancing = $ipLoadBalancing;
        return $this;
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
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerDel
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
}
