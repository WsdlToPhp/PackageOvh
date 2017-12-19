<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedReverseModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedReverseModify extends AbstractStructBase
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
     * The ip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip;
    /**
     * The reverse
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reverse;
    /**
     * Constructor method for dedicatedReverseModify
     * @uses DedicatedReverseModify::setSession()
     * @uses DedicatedReverseModify::setHostname()
     * @uses DedicatedReverseModify::setIp()
     * @uses DedicatedReverseModify::setReverse()
     * @param string $session
     * @param string $hostname
     * @param string $ip
     * @param string $reverse
     */
    public function __construct($session = null, $hostname = null, $ip = null, $reverse = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setIp($ip)
            ->setReverse($reverse);
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
     * @return \PayPal\StructType\DedicatedReverseModify
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
     * @return \PayPal\StructType\DedicatedReverseModify
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
     * Get ip value
     * @return string|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param string $ip
     * @return \PayPal\StructType\DedicatedReverseModify
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
    /**
     * Get reverse value
     * @return string|null
     */
    public function getReverse()
    {
        return $this->reverse;
    }
    /**
     * Set reverse value
     * @param string $reverse
     * @return \PayPal\StructType\DedicatedReverseModify
     */
    public function setReverse($reverse = null)
    {
        // validation for constraint: string
        if (!is_null($reverse) && !is_string($reverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reverse)), __LINE__);
        }
        $this->reverse = $reverse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedReverseModify
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
