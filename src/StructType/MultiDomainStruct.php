<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for multiDomainStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MultiDomainStruct extends AbstractStructBase
{
    /**
     * The multidomain
     * @var string
     */
    public $multidomain;
    /**
     * The target
     * @var string
     */
    public $target;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * Constructor method for multiDomainStruct
     * @uses MultiDomainStruct::setMultidomain()
     * @uses MultiDomainStruct::setTarget()
     * @uses MultiDomainStruct::setCountry()
     * @param string $multidomain
     * @param string $target
     * @param string $country
     */
    public function __construct($multidomain = null, $target = null, $country = null)
    {
        $this
            ->setMultidomain($multidomain)
            ->setTarget($target)
            ->setCountry($country);
    }
    /**
     * Get multidomain value
     * @return string|null
     */
    public function getMultidomain()
    {
        return $this->multidomain;
    }
    /**
     * Set multidomain value
     * @param string $multidomain
     * @return \Ovh\StructType\MultiDomainStruct
     */
    public function setMultidomain($multidomain = null)
    {
        // validation for constraint: string
        if (!is_null($multidomain) && !is_string($multidomain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($multidomain, true), gettype($multidomain)), __LINE__);
        }
        $this->multidomain = $multidomain;
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
     * @return \Ovh\StructType\MultiDomainStruct
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
     * @return \Ovh\StructType\MultiDomainStruct
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
