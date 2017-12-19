<?php

namespace PayPal\StructType;

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
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The ipLoadBalancing
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ipLoadBalancing;
    /**
     * The serverList
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
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
     * @param \PayPal\ArrayType\MyArrayOfStringType $serverList
     */
    public function __construct($session = null, $name = null, $ipLoadBalancing = null, \PayPal\ArrayType\MyArrayOfStringType $serverList = null)
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
     * @return \PayPal\StructType\DedicatedIpLoadBalancingAdd
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
     * @return \PayPal\StructType\DedicatedIpLoadBalancingAdd
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
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
     * @return \PayPal\StructType\DedicatedIpLoadBalancingAdd
     */
    public function setIpLoadBalancing($ipLoadBalancing = null)
    {
        // validation for constraint: string
        if (!is_null($ipLoadBalancing) && !is_string($ipLoadBalancing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ipLoadBalancing)), __LINE__);
        }
        $this->ipLoadBalancing = $ipLoadBalancing;
        return $this;
    }
    /**
     * Get serverList value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getServerList()
    {
        return $this->serverList;
    }
    /**
     * Set serverList value
     * @param \PayPal\ArrayType\MyArrayOfStringType $serverList
     * @return \PayPal\StructType\DedicatedIpLoadBalancingAdd
     */
    public function setServerList(\PayPal\ArrayType\MyArrayOfStringType $serverList = null)
    {
        $this->serverList = $serverList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedIpLoadBalancingAdd
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
