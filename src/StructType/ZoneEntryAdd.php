<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneEntryAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ZoneEntryAdd extends AbstractStructBase
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
     * The fieldtype
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fieldtype;
    /**
     * The target
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $target;
    /**
     * The overwrite
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $overwrite;
    /**
     * Constructor method for zoneEntryAdd
     * @uses ZoneEntryAdd::setSession()
     * @uses ZoneEntryAdd::setDomain()
     * @uses ZoneEntryAdd::setSubdomain()
     * @uses ZoneEntryAdd::setFieldtype()
     * @uses ZoneEntryAdd::setTarget()
     * @uses ZoneEntryAdd::setOverwrite()
     * @param string $session
     * @param string $domain
     * @param string $subdomain
     * @param string $fieldtype
     * @param string $target
     * @param bool $overwrite
     */
    public function __construct($session = null, $domain = null, $subdomain = null, $fieldtype = null, $target = null, $overwrite = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setSubdomain($subdomain)
            ->setFieldtype($fieldtype)
            ->setTarget($target)
            ->setOverwrite($overwrite);
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
     * @return \Ovh\StructType\ZoneEntryAdd
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
     * @return \Ovh\StructType\ZoneEntryAdd
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
     * @return \Ovh\StructType\ZoneEntryAdd
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
     * @return \Ovh\StructType\ZoneEntryAdd
     */
    public function setFieldtype($fieldtype = null)
    {
        // validation for constraint: string
        if (!is_null($fieldtype) && !is_string($fieldtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldtype)), __LINE__);
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
     * @return \Ovh\StructType\ZoneEntryAdd
     */
    public function setTarget($target = null)
    {
        // validation for constraint: string
        if (!is_null($target) && !is_string($target)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($target)), __LINE__);
        }
        $this->target = $target;
        return $this;
    }
    /**
     * Get overwrite value
     * @return bool|null
     */
    public function getOverwrite()
    {
        return $this->overwrite;
    }
    /**
     * Set overwrite value
     * @param bool $overwrite
     * @return \Ovh\StructType\ZoneEntryAdd
     */
    public function setOverwrite($overwrite = null)
    {
        // validation for constraint: boolean
        if (!is_null($overwrite) && !is_bool($overwrite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overwrite)), __LINE__);
        }
        $this->overwrite = $overwrite;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\ZoneEntryAdd
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
