<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIpLoadBalancingNameModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIpLoadBalancingNameModify extends AbstractStructBase
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
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * Constructor method for dedicatedIpLoadBalancingNameModify
     * @uses DedicatedIpLoadBalancingNameModify::setSession()
     * @uses DedicatedIpLoadBalancingNameModify::setIpLoadBalancing()
     * @uses DedicatedIpLoadBalancingNameModify::setName()
     * @param string $session
     * @param string $ipLoadBalancing
     * @param string $name
     */
    public function __construct($session = null, $ipLoadBalancing = null, $name = null)
    {
        $this
            ->setSession($session)
            ->setIpLoadBalancing($ipLoadBalancing)
            ->setName($name);
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
     * @return \Ovh\StructType\DedicatedIpLoadBalancingNameModify
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
     * @return \Ovh\StructType\DedicatedIpLoadBalancingNameModify
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
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Ovh\StructType\DedicatedIpLoadBalancingNameModify
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
}
