<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedSecondaryDNSAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedSecondaryDNSAdd extends AbstractStructBase
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
     * The domain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The nameserver
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nameserver;
    /**
     * The nameserverIp
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nameserverIp;
    /**
     * Constructor method for dedicatedSecondaryDNSAdd
     * @uses DedicatedSecondaryDNSAdd::setSession()
     * @uses DedicatedSecondaryDNSAdd::setHostname()
     * @uses DedicatedSecondaryDNSAdd::setIp()
     * @uses DedicatedSecondaryDNSAdd::setDomain()
     * @uses DedicatedSecondaryDNSAdd::setNameserver()
     * @uses DedicatedSecondaryDNSAdd::setNameserverIp()
     * @param string $session
     * @param string $hostname
     * @param string $ip
     * @param string $domain
     * @param string $nameserver
     * @param string $nameserverIp
     */
    public function __construct($session = null, $hostname = null, $ip = null, $domain = null, $nameserver = null, $nameserverIp = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setIp($ip)
            ->setDomain($domain)
            ->setNameserver($nameserver)
            ->setNameserverIp($nameserverIp);
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
     * @return \PayPal\StructType\DedicatedSecondaryDNSAdd
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
     * @return \PayPal\StructType\DedicatedSecondaryDNSAdd
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
     * @return \PayPal\StructType\DedicatedSecondaryDNSAdd
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
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \PayPal\StructType\DedicatedSecondaryDNSAdd
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get nameserver value
     * @return string|null
     */
    public function getNameserver()
    {
        return $this->nameserver;
    }
    /**
     * Set nameserver value
     * @param string $nameserver
     * @return \PayPal\StructType\DedicatedSecondaryDNSAdd
     */
    public function setNameserver($nameserver = null)
    {
        // validation for constraint: string
        if (!is_null($nameserver) && !is_string($nameserver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameserver)), __LINE__);
        }
        $this->nameserver = $nameserver;
        return $this;
    }
    /**
     * Get nameserverIp value
     * @return string|null
     */
    public function getNameserverIp()
    {
        return $this->nameserverIp;
    }
    /**
     * Set nameserverIp value
     * @param string $nameserverIp
     * @return \PayPal\StructType\DedicatedSecondaryDNSAdd
     */
    public function setNameserverIp($nameserverIp = null)
    {
        // validation for constraint: string
        if (!is_null($nameserverIp) && !is_string($nameserverIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameserverIp)), __LINE__);
        }
        $this->nameserverIp = $nameserverIp;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedSecondaryDNSAdd
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
