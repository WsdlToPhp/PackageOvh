<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dnsInstall StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DnsInstall extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The hosting
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hosting;
    /**
     * The minimized
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $minimized;
    /**
     * Constructor method for dnsInstall
     * @uses DnsInstall::setSession()
     * @uses DnsInstall::setDomain()
     * @uses DnsInstall::setHosting()
     * @uses DnsInstall::setMinimized()
     * @param string $session
     * @param string $domain
     * @param string $hosting
     * @param bool $minimized
     */
    public function __construct($session = null, $domain = null, $hosting = null, $minimized = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setHosting($hosting)
            ->setMinimized($minimized);
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
     * @return \Ovh\StructType\DnsInstall
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
     * @return \Ovh\StructType\DnsInstall
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
     * Get hosting value
     * @return string|null
     */
    public function getHosting()
    {
        return $this->hosting;
    }
    /**
     * Set hosting value
     * @param string $hosting
     * @return \Ovh\StructType\DnsInstall
     */
    public function setHosting($hosting = null)
    {
        // validation for constraint: string
        if (!is_null($hosting) && !is_string($hosting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hosting)), __LINE__);
        }
        $this->hosting = $hosting;
        return $this;
    }
    /**
     * Get minimized value
     * @return bool|null
     */
    public function getMinimized()
    {
        return $this->minimized;
    }
    /**
     * Set minimized value
     * @param bool $minimized
     * @return \Ovh\StructType\DnsInstall
     */
    public function setMinimized($minimized = null)
    {
        // validation for constraint: boolean
        if (!is_null($minimized) && !is_bool($minimized)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($minimized)), __LINE__);
        }
        $this->minimized = $minimized;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DnsInstall
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
