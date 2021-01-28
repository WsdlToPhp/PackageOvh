<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for automatedMailGetErrors StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AutomatedMailGetErrors extends AbstractStructBase
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
     * The deep
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $deep;
    /**
     * The limit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $limit;
    /**
     * Constructor method for automatedMailGetErrors
     * @uses AutomatedMailGetErrors::setSession()
     * @uses AutomatedMailGetErrors::setDomain()
     * @uses AutomatedMailGetErrors::setDeep()
     * @uses AutomatedMailGetErrors::setLimit()
     * @param string $session
     * @param string $domain
     * @param int $deep
     * @param int $limit
     */
    public function __construct($session = null, $domain = null, $deep = null, $limit = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setDeep($deep)
            ->setLimit($limit);
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
     * @return \Ovh\StructType\AutomatedMailGetErrors
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
     * @return \Ovh\StructType\AutomatedMailGetErrors
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
     * Get deep value
     * @return int|null
     */
    public function getDeep()
    {
        return $this->deep;
    }
    /**
     * Set deep value
     * @param int $deep
     * @return \Ovh\StructType\AutomatedMailGetErrors
     */
    public function setDeep($deep = null)
    {
        // validation for constraint: int
        if (!is_null($deep) && !(is_int($deep) || ctype_digit($deep))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deep, true), gettype($deep)), __LINE__);
        }
        $this->deep = $deep;
        return $this;
    }
    /**
     * Get limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $limit
     * @return \Ovh\StructType\AutomatedMailGetErrors
     */
    public function setLimit($limit = null)
    {
        // validation for constraint: int
        if (!is_null($limit) && !(is_int($limit) || ctype_digit($limit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limit, true), gettype($limit)), __LINE__);
        }
        $this->limit = $limit;
        return $this;
    }
}
