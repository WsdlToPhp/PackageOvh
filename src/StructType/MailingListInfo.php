<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mailingListInfo StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MailingListInfo extends AbstractStructBase
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
     * The ml
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ml;
    /**
     * Constructor method for mailingListInfo
     * @uses MailingListInfo::setSession()
     * @uses MailingListInfo::setDomain()
     * @uses MailingListInfo::setMl()
     * @param string $session
     * @param string $domain
     * @param string $ml
     */
    public function __construct($session = null, $domain = null, $ml = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setMl($ml);
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
     * @return \Ovh\StructType\MailingListInfo
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
     * @return \Ovh\StructType\MailingListInfo
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
     * Get ml value
     * @return string|null
     */
    public function getMl()
    {
        return $this->ml;
    }
    /**
     * Set ml value
     * @param string $ml
     * @return \Ovh\StructType\MailingListInfo
     */
    public function setMl($ml = null)
    {
        // validation for constraint: string
        if (!is_null($ml) && !is_string($ml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ml, true), gettype($ml)), __LINE__);
        }
        $this->ml = $ml;
        return $this;
    }
}
