<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for multiDomainInfo StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MultiDomainInfo extends AbstractStructBase
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
     * Constructor method for multiDomainInfo
     * @uses MultiDomainInfo::setSession()
     * @uses MultiDomainInfo::setDomain()
     * @uses MultiDomainInfo::setMultidomain()
     * @param string $session
     * @param string $domain
     * @param string $multidomain
     */
    public function __construct($session = null, $domain = null, $multidomain = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setMultidomain($multidomain);
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
     * @return \Ovh\StructType\MultiDomainInfo
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
     * @return \Ovh\StructType\MultiDomainInfo
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
     * @return \Ovh\StructType\MultiDomainInfo
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\MultiDomainInfo
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
