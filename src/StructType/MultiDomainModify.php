<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for multiDomainModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MultiDomainModify extends AbstractStructBase
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
     * The multidomain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $multidomain;
    /**
     * The target
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $target;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The ownLog
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $ownLog;
    /**
     * Constructor method for multiDomainModify
     * @uses MultiDomainModify::setSession()
     * @uses MultiDomainModify::setDomain()
     * @uses MultiDomainModify::setMultidomain()
     * @uses MultiDomainModify::setTarget()
     * @uses MultiDomainModify::setCountry()
     * @uses MultiDomainModify::setOwnLog()
     * @param string $session
     * @param string $domain
     * @param string $multidomain
     * @param string $target
     * @param string $country
     * @param bool $ownLog
     */
    public function __construct($session = null, $domain = null, $multidomain = null, $target = null, $country = null, $ownLog = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setMultidomain($multidomain)
            ->setTarget($target)
            ->setCountry($country)
            ->setOwnLog($ownLog);
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
     * @return \PayPal\StructType\MultiDomainModify
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
     * @return \PayPal\StructType\MultiDomainModify
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
     * @return \PayPal\StructType\MultiDomainModify
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
     * @return \PayPal\StructType\MultiDomainModify
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
     * @return \PayPal\StructType\MultiDomainModify
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
     * Get ownLog value
     * @return bool|null
     */
    public function getOwnLog()
    {
        return $this->ownLog;
    }
    /**
     * Set ownLog value
     * @param bool $ownLog
     * @return \PayPal\StructType\MultiDomainModify
     */
    public function setOwnLog($ownLog = null)
    {
        // validation for constraint: boolean
        if (!is_null($ownLog) && !is_bool($ownLog)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ownLog)), __LINE__);
        }
        $this->ownLog = $ownLog;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\MultiDomainModify
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
