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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
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
}
