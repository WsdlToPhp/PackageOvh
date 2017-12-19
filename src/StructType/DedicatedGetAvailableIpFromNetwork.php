<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedGetAvailableIpFromNetwork StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedGetAvailableIpFromNetwork extends AbstractStructBase
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
     * The network
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $network;
    /**
     * Constructor method for dedicatedGetAvailableIpFromNetwork
     * @uses DedicatedGetAvailableIpFromNetwork::setSession()
     * @uses DedicatedGetAvailableIpFromNetwork::setHostname()
     * @uses DedicatedGetAvailableIpFromNetwork::setNetwork()
     * @param string $session
     * @param string $hostname
     * @param string $network
     */
    public function __construct($session = null, $hostname = null, $network = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setNetwork($network);
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
     * @return \PayPal\StructType\DedicatedGetAvailableIpFromNetwork
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
     * @return \PayPal\StructType\DedicatedGetAvailableIpFromNetwork
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
     * Get network value
     * @return string|null
     */
    public function getNetwork()
    {
        return $this->network;
    }
    /**
     * Set network value
     * @param string $network
     * @return \PayPal\StructType\DedicatedGetAvailableIpFromNetwork
     */
    public function setNetwork($network = null)
    {
        // validation for constraint: string
        if (!is_null($network) && !is_string($network)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($network)), __LINE__);
        }
        $this->network = $network;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedGetAvailableIpFromNetwork
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
