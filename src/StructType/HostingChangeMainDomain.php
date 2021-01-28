<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hostingChangeMainDomain StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class HostingChangeMainDomain extends AbstractStructBase
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
     * The newDomain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $newDomain;
    /**
     * The mxAction
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mxAction;
    /**
     * The mxOffer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mxOffer;
    /**
     * Constructor method for hostingChangeMainDomain
     * @uses HostingChangeMainDomain::setSession()
     * @uses HostingChangeMainDomain::setDomain()
     * @uses HostingChangeMainDomain::setNewDomain()
     * @uses HostingChangeMainDomain::setMxAction()
     * @uses HostingChangeMainDomain::setMxOffer()
     * @param string $session
     * @param string $domain
     * @param string $newDomain
     * @param string $mxAction
     * @param string $mxOffer
     */
    public function __construct($session = null, $domain = null, $newDomain = null, $mxAction = null, $mxOffer = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setNewDomain($newDomain)
            ->setMxAction($mxAction)
            ->setMxOffer($mxOffer);
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
     * @return \Ovh\StructType\HostingChangeMainDomain
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
     * @return \Ovh\StructType\HostingChangeMainDomain
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
     * Get newDomain value
     * @return string|null
     */
    public function getNewDomain()
    {
        return $this->newDomain;
    }
    /**
     * Set newDomain value
     * @param string $newDomain
     * @return \Ovh\StructType\HostingChangeMainDomain
     */
    public function setNewDomain($newDomain = null)
    {
        // validation for constraint: string
        if (!is_null($newDomain) && !is_string($newDomain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newDomain, true), gettype($newDomain)), __LINE__);
        }
        $this->newDomain = $newDomain;
        return $this;
    }
    /**
     * Get mxAction value
     * @return string|null
     */
    public function getMxAction()
    {
        return $this->mxAction;
    }
    /**
     * Set mxAction value
     * @param string $mxAction
     * @return \Ovh\StructType\HostingChangeMainDomain
     */
    public function setMxAction($mxAction = null)
    {
        // validation for constraint: string
        if (!is_null($mxAction) && !is_string($mxAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mxAction, true), gettype($mxAction)), __LINE__);
        }
        $this->mxAction = $mxAction;
        return $this;
    }
    /**
     * Get mxOffer value
     * @return string|null
     */
    public function getMxOffer()
    {
        return $this->mxOffer;
    }
    /**
     * Set mxOffer value
     * @param string $mxOffer
     * @return \Ovh\StructType\HostingChangeMainDomain
     */
    public function setMxOffer($mxOffer = null)
    {
        // validation for constraint: string
        if (!is_null($mxOffer) && !is_string($mxOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mxOffer, true), gettype($mxOffer)), __LINE__);
        }
        $this->mxOffer = $mxOffer;
        return $this;
    }
}
