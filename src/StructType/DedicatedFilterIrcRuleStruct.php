<?php

namespace Ovh\StructType;

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
     * @return \Ovh\StructType\DedicatedFilterIrcRuleStruct
     */
    public function setFromIp($fromIp = null)
    {
        // validation for constraint: string
        if (!is_null($fromIp) && !is_string($fromIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromIp, true), gettype($fromIp)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedFilterIrcRuleStruct
     */
    public function setFromPort($fromPort = null)
    {
        // validation for constraint: string
        if (!is_null($fromPort) && !is_string($fromPort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromPort, true), gettype($fromPort)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedFilterIrcRuleStruct
     */
    public function setToIp($toIp = null)
    {
        // validation for constraint: string
        if (!is_null($toIp) && !is_string($toIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toIp, true), gettype($toIp)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedFilterIrcRuleStruct
     */
    public function setToPort($toPort = null)
    {
        // validation for constraint: string
        if (!is_null($toPort) && !is_string($toPort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toPort, true), gettype($toPort)), __LINE__);
        }
        $this->toPort = $toPort;
        return $this;
    }
}
