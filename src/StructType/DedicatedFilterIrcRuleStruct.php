<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFilterIrcRuleStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFilterIrcRuleStruct extends AbstractStructBase
{
    /**
     * The fromIp
     * @var string
     */
    public $fromIp;
    /**
     * The fromPort
     * @var string
     */
    public $fromPort;
    /**
     * The toIp
     * @var string
     */
    public $toIp;
    /**
     * The toPort
     * @var string
     */
    public $toPort;
    /**
     * Constructor method for dedicatedFilterIrcRuleStruct
     * @uses DedicatedFilterIrcRuleStruct::setFromIp()
     * @uses DedicatedFilterIrcRuleStruct::setFromPort()
     * @uses DedicatedFilterIrcRuleStruct::setToIp()
     * @uses DedicatedFilterIrcRuleStruct::setToPort()
     * @param string $fromIp
     * @param string $fromPort
     * @param string $toIp
     * @param string $toPort
     */
    public function __construct($fromIp = null, $fromPort = null, $toIp = null, $toPort = null)
    {
        $this
            ->setFromIp($fromIp)
            ->setFromPort($fromPort)
            ->setToIp($toIp)
            ->setToPort($toPort);
    }
    /**
     * Get fromIp value
     * @return string|null
     */
    public function getFromIp()
    {
        return $this->fromIp;
    }
    /**
     * Set fromIp value
     * @param string $fromIp
     * @return \PayPal\StructType\DedicatedFilterIrcRuleStruct
     */
    public function setFromIp($fromIp = null)
    {
        // validation for constraint: string
        if (!is_null($fromIp) && !is_string($fromIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromIp)), __LINE__);
        }
        $this->fromIp = $fromIp;
        return $this;
    }
    /**
     * Get fromPort value
     * @return string|null
     */
    public function getFromPort()
    {
        return $this->fromPort;
    }
    /**
     * Set fromPort value
     * @param string $fromPort
     * @return \PayPal\StructType\DedicatedFilterIrcRuleStruct
     */
    public function setFromPort($fromPort = null)
    {
        // validation for constraint: string
        if (!is_null($fromPort) && !is_string($fromPort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromPort)), __LINE__);
        }
        $this->fromPort = $fromPort;
        return $this;
    }
    /**
     * Get toIp value
     * @return string|null
     */
    public function getToIp()
    {
        return $this->toIp;
    }
    /**
     * Set toIp value
     * @param string $toIp
     * @return \PayPal\StructType\DedicatedFilterIrcRuleStruct
     */
    public function setToIp($toIp = null)
    {
        // validation for constraint: string
        if (!is_null($toIp) && !is_string($toIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toIp)), __LINE__);
        }
        $this->toIp = $toIp;
        return $this;
    }
    /**
     * Get toPort value
     * @return string|null
     */
    public function getToPort()
    {
        return $this->toPort;
    }
    /**
     * Set toPort value
     * @param string $toPort
     * @return \PayPal\StructType\DedicatedFilterIrcRuleStruct
     */
    public function setToPort($toPort = null)
    {
        // validation for constraint: string
        if (!is_null($toPort) && !is_string($toPort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toPort)), __LINE__);
        }
        $this->toPort = $toPort;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedFilterIrcRuleStruct
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
