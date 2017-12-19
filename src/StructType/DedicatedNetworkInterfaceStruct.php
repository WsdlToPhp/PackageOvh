<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedNetworkInterfaceStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedNetworkInterfaceStruct extends AbstractStructBase
{
    /**
     * The reverse
     * @var string
     */
    public $reverse;
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The ipv6
     * @var string
     */
    public $ipv6;
    /**
     * The mac
     * @var string
     */
    public $mac;
    /**
     * The switch
     * @var string
     */
    public $switch;
    /**
     * The icmp_drop
     * @var bool
     */
    public $icmp_drop;
    /**
     * The failover
     * @var bool
     */
    public $failover;
    /**
     * The routedTo
     * @var string
     */
    public $routedTo;
    /**
     * The ssl
     * @var bool
     */
    public $ssl;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * Constructor method for dedicatedNetworkInterfaceStruct
     * @uses DedicatedNetworkInterfaceStruct::setReverse()
     * @uses DedicatedNetworkInterfaceStruct::setIp()
     * @uses DedicatedNetworkInterfaceStruct::setIpv6()
     * @uses DedicatedNetworkInterfaceStruct::setMac()
     * @uses DedicatedNetworkInterfaceStruct::setSwitch()
     * @uses DedicatedNetworkInterfaceStruct::setIcmp_drop()
     * @uses DedicatedNetworkInterfaceStruct::setFailover()
     * @uses DedicatedNetworkInterfaceStruct::setRoutedTo()
     * @uses DedicatedNetworkInterfaceStruct::setSsl()
     * @uses DedicatedNetworkInterfaceStruct::setCountry()
     * @param string $reverse
     * @param string $ip
     * @param string $ipv6
     * @param string $mac
     * @param string $switch
     * @param bool $icmp_drop
     * @param bool $failover
     * @param string $routedTo
     * @param bool $ssl
     * @param string $country
     */
    public function __construct($reverse = null, $ip = null, $ipv6 = null, $mac = null, $switch = null, $icmp_drop = null, $failover = null, $routedTo = null, $ssl = null, $country = null)
    {
        $this
            ->setReverse($reverse)
            ->setIp($ip)
            ->setIpv6($ipv6)
            ->setMac($mac)
            ->setSwitch($switch)
            ->setIcmp_drop($icmp_drop)
            ->setFailover($failover)
            ->setRoutedTo($routedTo)
            ->setSsl($ssl)
            ->setCountry($country);
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
     * @return \PayPal\StructType\DedicatedNetworkInterfaceStruct
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
     * @return \PayPal\StructType\DedicatedNetworkInterfaceStruct
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
     * Get ipv6 value
     * @return string|null
     */
    public function getIpv6()
    {
        return $this->ipv6;
    }
    /**
     * Set ipv6 value
     * @param string $ipv6
     * @return \PayPal\StructType\DedicatedNetworkInterfaceStruct
     */
    public function setIpv6($ipv6 = null)
    {
        // validation for constraint: string
        if (!is_null($ipv6) && !is_string($ipv6)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ipv6)), __LINE__);
        }
        $this->ipv6 = $ipv6;
        return $this;
    }
    /**
     * Get mac value
     * @return string|null
     */
    public function getMac()
    {
        return $this->mac;
    }
    /**
     * Set mac value
     * @param string $mac
     * @return \PayPal\StructType\DedicatedNetworkInterfaceStruct
     */
    public function setMac($mac = null)
    {
        // validation for constraint: string
        if (!is_null($mac) && !is_string($mac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mac)), __LINE__);
        }
        $this->mac = $mac;
        return $this;
    }
    /**
     * Get switch value
     * @return string|null
     */
    public function getSwitch()
    {
        return $this->switch;
    }
    /**
     * Set switch value
     * @param string $switch
     * @return \PayPal\StructType\DedicatedNetworkInterfaceStruct
     */
    public function setSwitch($switch = null)
    {
        // validation for constraint: string
        if (!is_null($switch) && !is_string($switch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($switch)), __LINE__);
        }
        $this->switch = $switch;
        return $this;
    }
    /**
     * Get icmp_drop value
     * @return bool|null
     */
    public function getIcmp_drop()
    {
        return $this->icmp_drop;
    }
    /**
     * Set icmp_drop value
     * @param bool $icmp_drop
     * @return \PayPal\StructType\DedicatedNetworkInterfaceStruct
     */
    public function setIcmp_drop($icmp_drop = null)
    {
        // validation for constraint: boolean
        if (!is_null($icmp_drop) && !is_bool($icmp_drop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($icmp_drop)), __LINE__);
        }
        $this->icmp_drop = $icmp_drop;
        return $this;
    }
    /**
     * Get failover value
     * @return bool|null
     */
    public function getFailover()
    {
        return $this->failover;
    }
    /**
     * Set failover value
     * @param bool $failover
     * @return \PayPal\StructType\DedicatedNetworkInterfaceStruct
     */
    public function setFailover($failover = null)
    {
        // validation for constraint: boolean
        if (!is_null($failover) && !is_bool($failover)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($failover)), __LINE__);
        }
        $this->failover = $failover;
        return $this;
    }
    /**
     * Get routedTo value
     * @return string|null
     */
    public function getRoutedTo()
    {
        return $this->routedTo;
    }
    /**
     * Set routedTo value
     * @param string $routedTo
     * @return \PayPal\StructType\DedicatedNetworkInterfaceStruct
     */
    public function setRoutedTo($routedTo = null)
    {
        // validation for constraint: string
        if (!is_null($routedTo) && !is_string($routedTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routedTo)), __LINE__);
        }
        $this->routedTo = $routedTo;
        return $this;
    }
    /**
     * Get ssl value
     * @return bool|null
     */
    public function getSsl()
    {
        return $this->ssl;
    }
    /**
     * Set ssl value
     * @param bool $ssl
     * @return \PayPal\StructType\DedicatedNetworkInterfaceStruct
     */
    public function setSsl($ssl = null)
    {
        // validation for constraint: boolean
        if (!is_null($ssl) && !is_bool($ssl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ssl)), __LINE__);
        }
        $this->ssl = $ssl;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \PayPal\StructType\DedicatedNetworkInterfaceStruct
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedNetworkInterfaceStruct
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
