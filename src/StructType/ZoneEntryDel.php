<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneEntryDel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ZoneEntryDel extends AbstractStructBase
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
     * The fieldtype
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fieldtype;
    /**
     * The target
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $target;
    /**
     * Constructor method for zoneEntryDel
     * @uses ZoneEntryDel::setSession()
     * @uses ZoneEntryDel::setDomain()
     * @uses ZoneEntryDel::setSubdomain()
     * @uses ZoneEntryDel::setFieldtype()
     * @uses ZoneEntryDel::setTarget()
     * @param string $session
     * @param string $domain
     * @param string $subdomain
     * @param string $fieldtype
     * @param string $target
     */
    public function __construct($session = null, $domain = null, $subdomain = null, $fieldtype = null, $target = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setSubdomain($subdomain)
            ->setFieldtype($fieldtype)
            ->setTarget($target);
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
     * @return \Ovh\StructType\ZoneEntryDel
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
     * @return \Ovh\StructType\ZoneEntryDel
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
     * @return \Ovh\StructType\ZoneEntryDel
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
     * @return \Ovh\StructType\ZoneEntryDel
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
     * @return \Ovh\StructType\ZoneEntryDel
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
}
