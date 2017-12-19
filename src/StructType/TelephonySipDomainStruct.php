<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySipDomainStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySipDomainStruct extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The list
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $list;
    /**
     * Constructor method for telephonySipDomainStruct
     * @uses TelephonySipDomainStruct::setDomain()
     * @uses TelephonySipDomainStruct::setCountry()
     * @uses TelephonySipDomainStruct::setList()
     * @param string $domain
     * @param string $country
     * @param \Ovh\ArrayType\MyArrayOfStringType $list
     */
    public function __construct($domain = null, $country = null, \Ovh\ArrayType\MyArrayOfStringType $list = null)
    {
        $this
            ->setDomain($domain)
            ->setCountry($country)
            ->setList($list);
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
     * @return \Ovh\StructType\TelephonySipDomainStruct
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
     * @return \Ovh\StructType\TelephonySipDomainStruct
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
     * Get list value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \Ovh\ArrayType\MyArrayOfStringType $list
     * @return \Ovh\StructType\TelephonySipDomainStruct
     */
    public function setList(\Ovh\ArrayType\MyArrayOfStringType $list = null)
    {
        $this->list = $list;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySipDomainStruct
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
