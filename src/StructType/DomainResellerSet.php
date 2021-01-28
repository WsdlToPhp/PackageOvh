<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainResellerSet StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainResellerSet extends AbstractStructBase
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
     * The profile
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $profile;
    /**
     * Constructor method for domainResellerSet
     * @uses DomainResellerSet::setSession()
     * @uses DomainResellerSet::setDomain()
     * @uses DomainResellerSet::setProfile()
     * @param string $session
     * @param string $domain
     * @param string $profile
     */
    public function __construct($session = null, $domain = null, $profile = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setProfile($profile);
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
     * @return \Ovh\StructType\DomainResellerSet
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
     * @return \Ovh\StructType\DomainResellerSet
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
     * Get profile value
     * @return string|null
     */
    public function getProfile()
    {
        return $this->profile;
    }
    /**
     * Set profile value
     * @param string $profile
     * @return \Ovh\StructType\DomainResellerSet
     */
    public function setProfile($profile = null)
    {
        // validation for constraint: string
        if (!is_null($profile) && !is_string($profile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profile, true), gettype($profile)), __LINE__);
        }
        $this->profile = $profile;
        return $this;
    }
}
