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
     * @return \Ovh\StructType\ZoneStruct
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
     * @return \Ovh\StructType\ZoneStruct
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\ZoneStruct
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
