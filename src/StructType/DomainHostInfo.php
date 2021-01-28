<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainHostInfo StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainHostInfo extends AbstractStructBase
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
     * The host
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $host;
    /**
     * Constructor method for domainHostInfo
     * @uses DomainHostInfo::setSession()
     * @uses DomainHostInfo::setDomain()
     * @uses DomainHostInfo::setHost()
     * @param string $session
     * @param string $domain
     * @param string $host
     */
    public function __construct($session = null, $domain = null, $host = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setHost($host);
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
     * @return \Ovh\StructType\DomainHostInfo
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
     * @return \Ovh\StructType\DomainHostInfo
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
     * Get host value
     * @return string|null
     */
    public function getHost()
    {
        return $this->host;
    }
    /**
     * Set host value
     * @param string $host
     * @return \Ovh\StructType\DomainHostInfo
     */
    public function setHost($host = null)
    {
        // validation for constraint: string
        if (!is_null($host) && !is_string($host)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($host, true), gettype($host)), __LINE__);
        }
        $this->host = $host;
        return $this;
    }
}
