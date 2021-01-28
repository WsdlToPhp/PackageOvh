<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dnsDefaultInstallCustom StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DnsDefaultInstallCustom extends AbstractStructBase
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
     * The subdomain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $subdomain;
    /**
     * The hostingtype
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostingtype;
    /**
     * The hosting
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hosting;
    /**
     * The mxtype
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mxtype;
    /**
     * The mx
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mx;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The minimized
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $minimized;
    /**
     * Constructor method for dnsDefaultInstallCustom
     * @uses DnsDefaultInstallCustom::setSession()
     * @uses DnsDefaultInstallCustom::setDomain()
     * @uses DnsDefaultInstallCustom::setSubdomain()
     * @uses DnsDefaultInstallCustom::setHostingtype()
     * @uses DnsDefaultInstallCustom::setHosting()
     * @uses DnsDefaultInstallCustom::setMxtype()
     * @uses DnsDefaultInstallCustom::setMx()
     * @uses DnsDefaultInstallCustom::setCountry()
     * @uses DnsDefaultInstallCustom::setMinimized()
     * @param string $session
     * @param string $domain
     * @param string $subdomain
     * @param string $hostingtype
     * @param string $hosting
     * @param string $mxtype
     * @param string $mx
     * @param string $country
     * @param bool $minimized
     */
    public function __construct($session = null, $domain = null, $subdomain = null, $hostingtype = null, $hosting = null, $mxtype = null, $mx = null, $country = null, $minimized = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setSubdomain($subdomain)
            ->setHostingtype($hostingtype)
            ->setHosting($hosting)
            ->setMxtype($mxtype)
            ->setMx($mx)
            ->setCountry($country)
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
     * @return \Ovh\StructType\DnsDefaultInstallCustom
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
     * @return \Ovh\StructType\DnsDefaultInstallCustom
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
     * Get subdomain value
     * @return string|null
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }
    /**
     * Set subdomain value
     * @param string $subdomain
     * @return \Ovh\StructType\DnsDefaultInstallCustom
     */
    public function setSubdomain($subdomain = null)
    {
        // validation for constraint: string
        if (!is_null($subdomain) && !is_string($subdomain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subdomain, true), gettype($subdomain)), __LINE__);
        }
        $this->subdomain = $subdomain;
        return $this;
    }
    /**
     * Get hostingtype value
     * @return string|null
     */
    public function getHostingtype()
    {
        return $this->hostingtype;
    }
    /**
     * Set hostingtype value
     * @param string $hostingtype
     * @return \Ovh\StructType\DnsDefaultInstallCustom
     */
    public function setHostingtype($hostingtype = null)
    {
        // validation for constraint: string
        if (!is_null($hostingtype) && !is_string($hostingtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostingtype, true), gettype($hostingtype)), __LINE__);
        }
        $this->hostingtype = $hostingtype;
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
     * @return \Ovh\StructType\DnsDefaultInstallCustom
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
     * Get mxtype value
     * @return string|null
     */
    public function getMxtype()
    {
        return $this->mxtype;
    }
    /**
     * Set mxtype value
     * @param string $mxtype
     * @return \Ovh\StructType\DnsDefaultInstallCustom
     */
    public function setMxtype($mxtype = null)
    {
        // validation for constraint: string
        if (!is_null($mxtype) && !is_string($mxtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mxtype, true), gettype($mxtype)), __LINE__);
        }
        $this->mxtype = $mxtype;
        return $this;
    }
    /**
     * Get mx value
     * @return string|null
     */
    public function getMx()
    {
        return $this->mx;
    }
    /**
     * Set mx value
     * @param string $mx
     * @return \Ovh\StructType\DnsDefaultInstallCustom
     */
    public function setMx($mx = null)
    {
        // validation for constraint: string
        if (!is_null($mx) && !is_string($mx)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mx, true), gettype($mx)), __LINE__);
        }
        $this->mx = $mx;
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
     * @return \Ovh\StructType\DnsDefaultInstallCustom
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
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
     * @return \Ovh\StructType\DnsDefaultInstallCustom
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
