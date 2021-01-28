<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIpLoadBalancingServerStateModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIpLoadBalancingServerStateModify extends AbstractStructBase
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
     * The state
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $state;
    /**
     * Constructor method for dedicatedIpLoadBalancingServerStateModify
     * @uses DedicatedIpLoadBalancingServerStateModify::setSession()
     * @uses DedicatedIpLoadBalancingServerStateModify::setIpLoadBalancing()
     * @uses DedicatedIpLoadBalancingServerStateModify::setHostname()
     * @uses DedicatedIpLoadBalancingServerStateModify::setState()
     * @param string $session
     * @param string $ipLoadBalancing
     * @param string $hostname
     * @param string $state
     */
    public function __construct($session = null, $ipLoadBalancing = null, $hostname = null, $state = null)
    {
        $this
            ->setSession($session)
            ->setIpLoadBalancing($ipLoadBalancing)
            ->setHostname($hostname)
            ->setState($state);
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
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerStateModify
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
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerStateModify
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
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerStateModify
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
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerStateModify
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
}
