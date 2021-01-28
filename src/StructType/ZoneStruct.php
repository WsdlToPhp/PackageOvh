<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ZoneStruct extends AbstractStructBase
{
    /**
     * The subdomain
     * @var string
     */
    public $subdomain;
    /**
     * The fieldtype
     * @var string
     */
    public $fieldtype;
    /**
     * The target
     * @var string
     */
    public $target;
    /**
     * Constructor method for zoneStruct
     * @uses ZoneStruct::setSubdomain()
     * @uses ZoneStruct::setFieldtype()
     * @uses ZoneStruct::setTarget()
     * @param string $subdomain
     * @param string $fieldtype
     * @param string $target
     */
    public function __construct($subdomain = null, $fieldtype = null, $target = null)
    {
        $this
            ->setSubdomain($subdomain)
            ->setFieldtype($fieldtype)
            ->setTarget($target);
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
     * @return \Ovh\StructType\ZoneStruct
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
     * @return \Ovh\StructType\ZoneStruct
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
     * @return \Ovh\StructType\ZoneStruct
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
