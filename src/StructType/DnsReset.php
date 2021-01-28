<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dnsReset StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DnsReset extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The hosting
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hosting;
    /**
     * The minimized
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $minimized;
    /**
     * Constructor method for dnsReset
     * @uses DnsReset::setSession()
     * @uses DnsReset::setDomain()
     * @uses DnsReset::setHosting()
     * @uses DnsReset::setMinimized()
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
     * @return \Ovh\StructType\DnsReset
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\DnsReset
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
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
     * @return \Ovh\StructType\DnsReset
     */
    public function setHosting($hosting = null)
    {
        // validation for constraint: string
        if (!is_null($hosting) && !is_string($hosting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hosting, true), gettype($hosting)), __LINE__);
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
     * @return \Ovh\StructType\DnsReset
     */
    public function setMinimized($minimized = null)
    {
        // validation for constraint: boolean
        if (!is_null($minimized) && !is_bool($minimized)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($minimized, true), gettype($minimized)), __LINE__);
        }
        $this->minimized = $minimized;
        return $this;
    }
}
