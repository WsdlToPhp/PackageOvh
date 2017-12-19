<?php

namespace PayPal\StructType;

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
     * @return \PayPal\StructType\MultiDomainStruct
     */
    public function setMultidomain($multidomain = null)
    {
        // validation for constraint: string
        if (!is_null($multidomain) && !is_string($multidomain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($multidomain)), __LINE__);
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
     * @return \PayPal\StructType\MultiDomainStruct
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
     * @return \PayPal\StructType\MultiDomainStruct
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\MultiDomainStruct
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
