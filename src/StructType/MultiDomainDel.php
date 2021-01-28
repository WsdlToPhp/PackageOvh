<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for multiDomainDel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MultiDomainDel extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The multidomain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $multidomain;
    /**
     * Constructor method for multiDomainDel
     * @uses MultiDomainDel::setSession()
     * @uses MultiDomainDel::setDomain()
     * @uses MultiDomainDel::setMultidomain()
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
     * @return \Ovh\StructType\MultiDomainDel
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\MultiDomainDel
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
     * @return \Ovh\StructType\MultiDomainDel
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
}
