<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIpLoadBalancingAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIpLoadBalancingAdd extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The ipLoadBalancing
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ipLoadBalancing;
    /**
     * The serverList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $serverList;
    /**
     * Constructor method for dedicatedIpLoadBalancingAdd
     * @uses DedicatedIpLoadBalancingAdd::setSession()
     * @uses DedicatedIpLoadBalancingAdd::setName()
     * @uses DedicatedIpLoadBalancingAdd::setIpLoadBalancing()
     * @uses DedicatedIpLoadBalancingAdd::setServerList()
     * @param string $session
     * @param string $name
     * @param string $ipLoadBalancing
     * @param \Ovh\ArrayType\MyArrayOfStringType $serverList
     */
    public function __construct($session = null, $name = null, $ipLoadBalancing = null, \Ovh\ArrayType\MyArrayOfStringType $serverList = null)
    {
        $this
            ->setSession($session)
            ->setName($name)
            ->setIpLoadBalancing($ipLoadBalancing)
            ->setServerList($serverList);
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
     * @return \Ovh\StructType\DedicatedIpLoadBalancingAdd
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
     * @return \Ovh\StructType\DedicatedIpLoadBalancingAdd
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
     * @return \Ovh\StructType\DedicatedIpLoadBalancingAdd
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
     * Get serverList value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getServerList()
    {
        return $this->serverList;
    }
    /**
     * Set serverList value
     * @param \Ovh\ArrayType\MyArrayOfStringType $serverList
     * @return \Ovh\StructType\DedicatedIpLoadBalancingAdd
     */
    public function setServerList(\Ovh\ArrayType\MyArrayOfStringType $serverList = null)
    {
        $this->serverList = $serverList;
        return $this;
    }
}
