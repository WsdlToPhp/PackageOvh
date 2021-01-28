<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIpLoadBalancingStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIpLoadBalancingStruct extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The ipLoadBalancing
     * @var string
     */
    public $ipLoadBalancing;
    /**
     * The active
     * @var int
     */
    public $active;
    /**
     * The inactive
     * @var int
     */
    public $inactive;
    /**
     * The serverList
     * @var \Ovh\ArrayType\MyArrayOfDedicatedIpLoadBalancingServerStructType
     */
    public $serverList;
    /**
     * Constructor method for dedicatedIpLoadBalancingStruct
     * @uses DedicatedIpLoadBalancingStruct::setName()
     * @uses DedicatedIpLoadBalancingStruct::setIpLoadBalancing()
     * @uses DedicatedIpLoadBalancingStruct::setActive()
     * @uses DedicatedIpLoadBalancingStruct::setInactive()
     * @uses DedicatedIpLoadBalancingStruct::setServerList()
     * @param string $name
     * @param string $ipLoadBalancing
     * @param int $active
     * @param int $inactive
     * @param \Ovh\ArrayType\MyArrayOfDedicatedIpLoadBalancingServerStructType $serverList
     */
    public function __construct($name = null, $ipLoadBalancing = null, $active = null, $inactive = null, \Ovh\ArrayType\MyArrayOfDedicatedIpLoadBalancingServerStructType $serverList = null)
    {
        $this
            ->setName($name)
            ->setIpLoadBalancing($ipLoadBalancing)
            ->setActive($active)
            ->setInactive($inactive)
            ->setServerList($serverList);
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
     * @return \Ovh\StructType\DedicatedIpLoadBalancingStruct
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
     * @return \Ovh\StructType\DedicatedIpLoadBalancingStruct
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
     * Get active value
     * @return int|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param int $active
     * @return \Ovh\StructType\DedicatedIpLoadBalancingStruct
     */
    public function setActive($active = null)
    {
        // validation for constraint: int
        if (!is_null($active) && !(is_int($active) || ctype_digit($active))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get inactive value
     * @return int|null
     */
    public function getInactive()
    {
        return $this->inactive;
    }
    /**
     * Set inactive value
     * @param int $inactive
     * @return \Ovh\StructType\DedicatedIpLoadBalancingStruct
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: int
        if (!is_null($inactive) && !(is_int($inactive) || ctype_digit($inactive))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->inactive = $inactive;
        return $this;
    }
    /**
     * Get serverList value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedIpLoadBalancingServerStructType|null
     */
    public function getServerList()
    {
        return $this->serverList;
    }
    /**
     * Set serverList value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedIpLoadBalancingServerStructType $serverList
     * @return \Ovh\StructType\DedicatedIpLoadBalancingStruct
     */
    public function setServerList(\Ovh\ArrayType\MyArrayOfDedicatedIpLoadBalancingServerStructType $serverList = null)
    {
        $this->serverList = $serverList;
        return $this;
    }
}
