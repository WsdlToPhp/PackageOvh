<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneEntryAddCustom StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ZoneEntryAddCustom extends AbstractStructBase
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
     * The fieldtype
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fieldtype;
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
     * The subdomain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $subdomain;
    /**
     * The priority
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $priority;
    /**
     * The target
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $target;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * Constructor method for zoneEntryAddCustom
     * @uses ZoneEntryAddCustom::setSession()
     * @uses ZoneEntryAddCustom::setDomain()
     * @uses ZoneEntryAddCustom::setFieldtype()
     * @uses ZoneEntryAddCustom::setHostingtype()
     * @uses ZoneEntryAddCustom::setHosting()
     * @uses ZoneEntryAddCustom::setSubdomain()
     * @uses ZoneEntryAddCustom::setPriority()
     * @uses ZoneEntryAddCustom::setTarget()
     * @uses ZoneEntryAddCustom::setCountry()
     * @param string $session
     * @param string $domain
     * @param string $fieldtype
     * @param string $hostingtype
     * @param string $hosting
     * @param string $subdomain
     * @param string $priority
     * @param string $target
     * @param string $country
     */
    public function __construct($session = null, $domain = null, $fieldtype = null, $hostingtype = null, $hosting = null, $subdomain = null, $priority = null, $target = null, $country = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setFieldtype($fieldtype)
            ->setHostingtype($hostingtype)
            ->setHosting($hosting)
            ->setSubdomain($subdomain)
            ->setPriority($priority)
            ->setTarget($target)
            ->setCountry($country);
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
     * @return \Ovh\StructType\ZoneEntryAddCustom
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
     * @return \Ovh\StructType\ZoneEntryAddCustom
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
     * Get fieldtype value
     * @return string|null
     */
    public function getFieldtype()
    {
        return $this->fieldtype;
    }
    /**
     * Set fieldtype value
     * @param string $fieldtype
     * @return \Ovh\StructType\ZoneEntryAddCustom
     */
    public function setFieldtype($fieldtype = null)
    {
        // validation for constraint: string
        if (!is_null($fieldtype) && !is_string($fieldtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldtype, true), gettype($fieldtype)), __LINE__);
        }
        $this->fieldtype = $fieldtype;
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
     * @return \Ovh\StructType\ZoneEntryAddCustom
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
     * @return \Ovh\StructType\ZoneEntryAddCustom
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
     * @return \Ovh\StructType\ZoneEntryAddCustom
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
     * Get priority value
     * @return string|null
     */
    public function getPriority()
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param string $priority
     * @return \Ovh\StructType\ZoneEntryAddCustom
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: string
        if (!is_null($priority) && !is_string($priority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        return $this;
    }
    /**
     * Get target value
     * @return string|null
     */
    public function getTarget()
    {
        return $this->target;
    }
    /**
     * Set target value
     * @param string $target
     * @return \Ovh\StructType\ZoneEntryAddCustom
     */
    public function setTarget($target = null)
    {
        // validation for constraint: string
        if (!is_null($target) && !is_string($target)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($target, true), gettype($target)), __LINE__);
        }
        $this->target = $target;
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
     * @return \Ovh\StructType\ZoneEntryAddCustom
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
}
