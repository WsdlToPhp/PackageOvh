<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for redirectedEmailAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RedirectedEmailAdd extends AbstractStructBase
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
     * The redirected
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirected;
    /**
     * The target
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $target;
    /**
     * The subdomain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $subdomain;
    /**
     * The localCopy
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $localCopy;
    /**
     * Constructor method for redirectedEmailAdd
     * @uses RedirectedEmailAdd::setSession()
     * @uses RedirectedEmailAdd::setDomain()
     * @uses RedirectedEmailAdd::setRedirected()
     * @uses RedirectedEmailAdd::setTarget()
     * @uses RedirectedEmailAdd::setSubdomain()
     * @uses RedirectedEmailAdd::setLocalCopy()
     * @param string $session
     * @param string $domain
     * @param string $redirected
     * @param string $target
     * @param string $subdomain
     * @param bool $localCopy
     */
    public function __construct($session = null, $domain = null, $redirected = null, $target = null, $subdomain = null, $localCopy = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setRedirected($redirected)
            ->setTarget($target)
            ->setSubdomain($subdomain)
            ->setLocalCopy($localCopy);
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
     * @return \Ovh\StructType\RedirectedEmailAdd
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
     * @return \Ovh\StructType\RedirectedEmailAdd
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
     * Get redirected value
     * @return string|null
     */
    public function getRedirected()
    {
        return $this->redirected;
    }
    /**
     * Set redirected value
     * @param string $redirected
     * @return \Ovh\StructType\RedirectedEmailAdd
     */
    public function setRedirected($redirected = null)
    {
        // validation for constraint: string
        if (!is_null($redirected) && !is_string($redirected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirected, true), gettype($redirected)), __LINE__);
        }
        $this->redirected = $redirected;
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
     * @return \Ovh\StructType\RedirectedEmailAdd
     */
    public function setTarget($target = null)
    {
        // validation for constraint: string
        if (!is_null($target) && !is_string($target)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($target, true), gettype($target)), __LINE__);
        }
        $this->target = $target;
        return $this;
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
     * @return \Ovh\StructType\RedirectedEmailAdd
     */
    public function setSubdomain($subdomain = null)
    {
        // validation for constraint: string
        if (!is_null($subdomain) && !is_string($subdomain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subdomain, true), gettype($subdomain)), __LINE__);
        }
        $this->subdomain = $subdomain;
        return $this;
    }
    /**
     * Get localCopy value
     * @return bool|null
     */
    public function getLocalCopy()
    {
        return $this->localCopy;
    }
    /**
     * Set localCopy value
     * @param bool $localCopy
     * @return \Ovh\StructType\RedirectedEmailAdd
     */
    public function setLocalCopy($localCopy = null)
    {
        // validation for constraint: boolean
        if (!is_null($localCopy) && !is_bool($localCopy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localCopy, true), gettype($localCopy)), __LINE__);
        }
        $this->localCopy = $localCopy;
        return $this;
    }
}
