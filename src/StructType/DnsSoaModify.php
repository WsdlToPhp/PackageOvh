<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dnsSoaModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DnsSoaModify extends AbstractStructBase
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
     * The ttl
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ttl;
    /**
     * Constructor method for dnsSoaModify
     * @uses DnsSoaModify::setSession()
     * @uses DnsSoaModify::setDomain()
     * @uses DnsSoaModify::setTtl()
     * @param string $session
     * @param string $domain
     * @param int $ttl
     */
    public function __construct($session = null, $domain = null, $ttl = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setTtl($ttl);
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
     * @return \Ovh\StructType\DnsSoaModify
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
     * @return \Ovh\StructType\DnsSoaModify
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
     * Get ttl value
     * @return int|null
     */
    public function getTtl()
    {
        return $this->ttl;
    }
    /**
     * Set ttl value
     * @param int $ttl
     * @return \Ovh\StructType\DnsSoaModify
     */
    public function setTtl($ttl = null)
    {
        // validation for constraint: int
        if (!is_null($ttl) && !(is_int($ttl) || ctype_digit($ttl))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ttl, true), gettype($ttl)), __LINE__);
        }
        $this->ttl = $ttl;
        return $this;
    }
}
