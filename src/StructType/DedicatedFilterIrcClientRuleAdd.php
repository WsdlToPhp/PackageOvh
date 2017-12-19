<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFilterIrcClientRuleAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFilterIrcClientRuleAdd extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The fromIp
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fromIp;
    /**
     * The toIp
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $toIp;
    /**
     * Constructor method for dedicatedFilterIrcClientRuleAdd
     * @uses DedicatedFilterIrcClientRuleAdd::setSession()
     * @uses DedicatedFilterIrcClientRuleAdd::setHostname()
     * @uses DedicatedFilterIrcClientRuleAdd::setFromIp()
     * @uses DedicatedFilterIrcClientRuleAdd::setToIp()
     * @param string $session
     * @param string $hostname
     * @param string $fromIp
     * @param string $toIp
     */
    public function __construct($session = null, $hostname = null, $fromIp = null, $toIp = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setFromIp($fromIp)
            ->setToIp($toIp);
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
     * @return \PayPal\StructType\DedicatedFilterIrcClientRuleAdd
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
     * @return \PayPal\StructType\DedicatedFilterIrcClientRuleAdd
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostname)), __LINE__);
        }
        $this->hostname = $hostname;
        return $this;
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
     * @return \PayPal\StructType\DedicatedFilterIrcClientRuleAdd
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
     * @return \PayPal\StructType\DedicatedFilterIrcClientRuleAdd
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedFilterIrcClientRuleAdd
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
