<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dnsInstallCustom StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DnsInstallCustom extends AbstractStructBase
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
     * The subdomain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $subdomain;
    /**
     * The hostingtype
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostingtype;
    /**
     * The hosting
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hosting;
    /**
     * The mxtype
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mxtype;
    /**
     * The mx
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mx;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The minimized
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $minimized;
    /**
     * Constructor method for dnsInstallCustom
     * @uses DnsInstallCustom::setSession()
     * @uses DnsInstallCustom::setDomain()
     * @uses DnsInstallCustom::setSubdomain()
     * @uses DnsInstallCustom::setHostingtype()
     * @uses DnsInstallCustom::setHosting()
     * @uses DnsInstallCustom::setMxtype()
     * @uses DnsInstallCustom::setMx()
     * @uses DnsInstallCustom::setCountry()
     * @uses DnsInstallCustom::setMinimized()
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
     * @return \Ovh\StructType\DnsInstallCustom
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
     * @return \Ovh\StructType\DnsInstallCustom
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
     * @return \Ovh\StructType\DnsInstallCustom
     */
    public function setSubdomain($subdomain = null)
    {
        // validation for constraint: string
        if (!is_null($subdomain) && !is_string($subdomain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subdomain)), __LINE__);
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
     * @return \Ovh\StructType\DnsInstallCustom
     */
    public function setHostingtype($hostingtype = null)
    {
        // validation for constraint: string
        if (!is_null($hostingtype) && !is_string($hostingtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostingtype)), __LINE__);
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
     * @return \Ovh\StructType\DnsInstallCustom
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
     * @return \Ovh\StructType\DnsInstallCustom
     */
    public function setMxtype($mxtype = null)
    {
        // validation for constraint: string
        if (!is_null($mxtype) && !is_string($mxtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mxtype)), __LINE__);
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
     * @return \Ovh\StructType\DnsInstallCustom
     */
    public function setMx($mx = null)
    {
        // validation for constraint: string
        if (!is_null($mx) && !is_string($mx)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mx)), __LINE__);
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
     * @return \Ovh\StructType\DnsInstallCustom
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
     * @return \Ovh\StructType\DnsInstallCustom
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
     * @return \Ovh\StructType\DnsInstallCustom
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
