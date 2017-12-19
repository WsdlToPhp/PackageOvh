<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for subDomainStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SubDomainStruct extends AbstractStructBase
{
    /**
     * The subdomain
     * @var string
     */
    public $subdomain;
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
     * Constructor method for subDomainStruct
     * @uses SubDomainStruct::setSubdomain()
     * @uses SubDomainStruct::setTarget()
     * @uses SubDomainStruct::setCountry()
     * @param string $subdomain
     * @param string $target
     * @param string $country
     */
    public function __construct($subdomain = null, $target = null, $country = null)
    {
        $this
            ->setSubdomain($subdomain)
            ->setTarget($target)
            ->setCountry($country);
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
     * @return \PayPal\StructType\SubDomainStruct
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
     * @return \PayPal\StructType\SubDomainStruct
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
     * @return \PayPal\StructType\SubDomainStruct
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
     * @return \PayPal\StructType\SubDomainStruct
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
